<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\opinion;
use App\Http\Requests\OpinionRequest;
class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //删除数据库的方法
    public function delete($id){
        $bool = opinion::destroy($id);
        if($bool){
            return redirect('admin/opinion')->with('success','意见删除成功');
        }else{

            return redirect('admin/opinion')->with('error','意见删除失败');
        }


    }

    public function index(Request $request)
    {
        $search = $request->input('search','');
        $opinion = opinion::where('name','like',"%$search%")->paginate(5);
        $all = $request->all();
        return view('Admin/opinion/index',['opinion'=>$opinion,'title'=>'意见首页','all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/opinion/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OpinionRequest $request)
    {
        $opinion = new opinion;
        $opinion->name = $request->input('name','');
        $opinion->phone = $request->input('phone','');
        $opinion->content = $request->input('content','');
        $hidden = $request->input('hidden','');
        $bool = $opinion->save();

        if ($bool && $hidden) {
             return redirect('/')->with('success','投资人添加成功');
        }elseif($bool && $hidden == ''){
            return redirect('/admin/opinion')->with('success','投资人添加成功');
        }else{
            return redirect('/admin/opinion')->with('error','投资人添加失败');

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
        $opinion = opinion::find($id);
        return view('Admin/opinion/edit',['opinion'=>$opinion,'title'=>'公告修改']);
//未修改


        /*dd($request->all());
        $opinion = opinion::find($id);
        $opinion->name = input('name','');
        $opinion->phone = input('phone','');
        $opinion->content = input('content','');
        $bool = $opinion->save();
        if($bool){
            return redirect('admin/opinion')->with('success','意见修改成功');
        }else{

            return redirect('admin/opinion')->with('error','意见修改失败');
        }*/
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
        
        $opinion = opinion::find($id);
        $opinion->name = $request->input('name','');
        $opinion->phone = $request->input('phone','');
        $opinion->content = $request->input('content','');
        $bool = $opinion->save();
        if($bool){
            return redirect('admin/opinion')->with('success','意见修改成功');
        }else{

            return redirect('admin/opinion')->with('error','意见修改失败');
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
