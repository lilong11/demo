<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdvRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adv;

class AdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->input('search','')) ;
      $search =$request->input('search','') ;
        $adv = adv::where('id','like','%'.$search.'%')->Paginate(3); 
        // $adv = adv::where('guanggao','like',"%$search%")->Paginate(3); 
        $all = $request->all();
        // dump($request->all());
        // dump('我是广告的首页');
        // return view('Admin/adv/index');
        return view('Admin/adv/index',['title'=>'广告首页','adv'=>$adv,'all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/adv/create',['title'=>'广告添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvRequest $request)
    {   
        if($request->hasFile('guanggao')){
            $file = $request->file('guanggao');
            // dump($file);
            $exe = $file->extension();
            $filename = time().rand(1000,9999);
            // $filename = time();
            // dump($file->storeAs('adv',$filename.'.'.$exe));


            $adv = new adv;
            $adv->guanggao =  $file->storeAs('adv',$filename.'.'.$exe);
            $adv->save();



            // $users->uname = $request->input('uname','');
            return redirect('/adv')->with('success','添加成功');
        }else{
            // dump('瓜娃子不填东西还想看涂片XX');
            return redirect('/adv')->with('error','添加失败');
        }
        // dump($request->all());
        /*dump($request->file('text'));
        dump($request->file('image'));*/
        // $file = $request->file('guanggao');
        // dump($file);
        // dump($file->store('adv'));
        // dump($_POST);
        // dump($_GET);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dump($id);
        $adv = adv::find($id);
         // dump($adv);
         return view('Admin/adv/edit',['adv'=>$adv]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dump($id);
    }
    public function delete($id){
       $bool = adv::destroy($id);
       // dump($bool);
        if($bool){

            return redirect('adv')->with('success','文章删除成功');
        }else{

            return redirect('adv')->with('error','文章删除失败');
        }
    }
}
