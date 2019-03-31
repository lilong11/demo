<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\mess;
use App\Http\Requests\MessRequest;


class MessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function delete($id){
           $bool = mess::destroy($id);
            // dump($bool);
            if($bool){

            return redirect('admin/mess')->with('success','留言删除成功');
        }else{

            return redirect('admin/mess')->with('error','留言删除失败');
        }
    }

    public function index(Request $request)
    {
        $search = $request->input('search','');
        // dump($search);
        $mess = mess::where('name','like',"%$search%")->Paginate(3);
        // $report = report::where('name','like',"%$search%")->Paginate(3); 
        $i = 0;
        $all = $request->all();
        // dump($all);
        // return view('Admin/mess/index',['mess'=>$mess,'all'=>$all]);
        return view('Admin/mess/index',['mess'=>$mess,'all'=>$all,'i'=>$i]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/mess/create',['title'=>'添加留言']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessRequest $request)
    {
        $mess = new Mess;

        $mess->name = $request->input('name','');
        $mess->phone = $request->input('phone','');
        $mess->mess = $request->input('mess','');
        $hidden = $request->input('hidden','');
   
        $bool = $mess->save();
        if($bool &&  $hidden){ 
            return redirect('/')->with('success','添加成功');
         }elseif($bool && $hidden==''){
            return redirect('/admin/mess')->with('success','添加成功');

         }else{

            return redirect('/admin/mess')->with('error','添加失败');
         }
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
        $mess = new mess;
        $v = $mess::find($id);
        return view('Admin/mess/edit',['v'=>$v,'title'=>'留言修改']);

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
        dump($id);
        $mess = new mess;
        $v = $mess->find($id);
        $v->mess = $request->input('mess','');
        $bool = $v->save();
        if($bool){ 
            return redirect('admin/mess')->with('success','修改成功');
         }else{ 
            return redirect('admin/mess')->with('error','修改失败');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
