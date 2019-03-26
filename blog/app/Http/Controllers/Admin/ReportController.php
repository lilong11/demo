<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\report;
use App\Http\Requests\ReportRequest;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        dump($id);
        $bool = report::destroy($id);
        if($bool){
                 return redirect('/admin/report')->with('success','删除成功');
        }else{
            // dump('瓜娃子不填东西还想看涂片XX');
            return redirect('/admin/report')->with('error','删除失败');
        }

    }

    public function index(Request $request)
    {
        $search = $request->input('search','');
        // dump($request->all());
        // $report = report::where('name','like','%'.$search.'%')->paginate(5);
        $report = report::where('name','like',"%$search%")->Paginate(3); 

        // return view('Admin/report/index',['report'=>$report,'search'=>$search]);
        return view('Admin/report/index',['report'=>$report,'all' => ($request->all())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/report/create');
        // dump('我是举报添加页面');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $file = $request->file('pic');
        // dump($request->file('pic'));
        // dump($request->all());
        // dd($request->all()->pic);//这样不行吗,我丢

        $report = new report;
        $report->name = $request->input('name','');
        $report->phone = $request->input('phone','');
        $report->email = $request->input('email','');
        $report->content = $request->input('content','');
        $hidden = $request->input('hidden','');
        // $report->pic = $request->input('pic','');

        // 自动匹配后缀名
        if($request->hasFile('pic') && $hidden){
        $exe = $file->extension();
        $filename = time().rand(1000,9999);

        $report->pic = $file->storeAs('report',$filename.'.'.$exe);
        $report->save();
        // dump($report->save());
        
          return redirect('/')->with('success','添加成功');
        }elseif($request->hasFile('pic') && $hidden == ''){
        $exe = $file->extension();
        $filename = time().rand(1000,9999);

        $report->pic = $file->storeAs('report',$filename.'.'.$exe);
        $report->save();
        // dump($report->save());
         return redirect('/admin/report')->with('success','添加成功');
        }else{
            return redirect('/admin/report')->with('error','添加失败');

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
        //
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
        //
    }
}
