<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\notice;
use App\Http\Requests\NoticeRequest;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status($id){
        // dump($id);
        $notice = notice::find($id);
        if($notice->status == 0){
            $notice->status = 1;
            $bool = $notice->save();
        }else{
            $notice->status =0;
            $bool = $notice->save();
        }
        if($bool){
            return redirect('/admin/notice')->with('success','公告显示状态修改成功');
        }else{
            return redirect('/admin/notice')->with('error','公告显示状态修改失败');
        }

    }

    public function index(Request $request)
    {
        // $a = new notice;
        // notice::paginate();
        $search = $request->input('search','');
        // dump($search);
        // $notice = $a->paginate(3);
        $all = $request->all();
        // dump($all);
        $notice = notice::where('notice','like',"%$search%")->paginate(3);
        return view('Admin/notice/index',['notice'=>$notice,'title'=>'公告展示页','all'=>$all]);
    }


    public function  delete($id){
        $bool = notice::destroy($id);
            // dump($bool);
        if($bool){
            return redirect('admin/notice')->with('success','公告删除成功');
        }else{

            return redirect('admin/notice')->with('error','公告删除失败');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/notice/create',['title'=>'公告添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        $notice = new notice;
        $notice->notice = $request->input('notice');
        $bool = $notice->save();
        if($bool){
            return redirect('admin/notice')->with('success','公告添加成功');
        }else{

            return redirect('admin/notice')->with('error','公告添加失败');
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
        $notice = notice::find($id);
        return view('Admin/notice/edit',['notice'=>$notice,'title'=>'公告修改']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, $id)
    {
        // dump($request->all());
        $notice = notice::find($id);
        // dump($notice);
        $notice->notice = $request->input('notice','');
        $bool = $notice->save();
        if($bool){
            return redirect('/admin/notice')->with('success','公告修改成功');
        }else{
            return redirect('/admin/notice')->with('error','公告修改失败');
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
