<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Links;   
use DB;


class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $links = links::all(); //查询links数据表里的全部数据
       // dump($links);
        return view('Admin.Links.links',['links'=>$links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.Links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->lname);
        //数据验证
        $this->validate($request, [
            'lname' => 'required', //以字母开头  6到16位的名字
            'lurl' => 'required|unique:links', //数据库里的名字不会有重复的
            'limg' => 'required',
        ],[
            'lname.required'=>'* 名称不能为空',
            'lurl.unique'=>'* 地址不能重复',
            // 'lurl.regex'=>'* 地址格式有问题:以https://开头',
            'lurl.required'=>'* 地址不能为空',
            'limg.required'=>'* 图片不能为空',
        ]);

        //接收文件上传对象
        $file = $request->file('limg');
        $file_name = $file->store('links');

        $links = new Links;
        $links->lname = $request->input('lname','');
        $links->lurl = $request->input('lurl','');
        $links->limg = $file_name;
         // 执行添加到数据库
        $res = $links->save();

         if($res){
            DB::commit();
            return redirect('links')->with('success','添加成功'); //添加数据库成功后跳转到显示页面
        }else{
            DB::rollBack();
            return redirect('links')->with('error','添加失败');
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
        if (Links::destroy($id)) {
            return redirect('/links')->with('success','删除成功');
        }else{
            return redirect('/links')->with('success','删除失败');

        }
    }
}
