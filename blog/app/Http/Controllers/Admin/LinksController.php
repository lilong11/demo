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


        //数据验证
        $this->validate($request, [
            'lname' => 'required|regex:/^[a-zA-Z{1}[\w]{5,15}$/', //以字母开头  6到16位的名字
            'lurl' => 'required|unique:links', //数据库里的名字不会有重复的
            'limg' => 'required',
        ],[
            'lname.required'=>'* 名称不能为空',
            'lname.regex'=>'* 名称格式错误',
            'lurl.required'=>'* 地址不能为空',
            'limg.required'=>'* 图片不能为空',
        ]);

        // dump($request->all());

        $links = new Links;
        $links->lname = $request->input('lname','');
        $links->lurl = $request->input('lurl','');
        $links->limg = $request->input('limg','');
         // 执行添加到数据库
        $res = $links->save();

       

        $data = $request->except(['_token','limg','pic']);     //过滤一下子数据

         if($request->hasFile('limg')){             //  如果有图片上传：

            $file = Input::file('limg');

            $enev = $file->getClientOriginalExtension();   //上传文件的后缀名
        
            $newName = 'link_'.date('YmdHis').mt_rand(1000,9999).'.'.$enev;    //设置文件名称 
         
            $path = $file->move(public_path().'/uploads/',$newName);     // 移动文件

            $filepath = '/uploads/'.$newName;             //拼接文件路径

            $data['limg'] = $filepath;         
        }

        $res = Links::create($data);                // 执行修改 
         if($res){
            DB::commit();
            return redirect('admin/links')->with('success','添加成功'); //添加数据库成功后跳转到显示页面
        }else{
            DB::rollBack();
            return redirect('admin/links')->with('error','添加失败');
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
        //链接删除
        // echo $id;
        
        if (Links::destroy($id)) {
            return redirect('admin/links')->with('success','删除成功');
        }else{
            return redirect('admin/links')->with('success','删除失败');

        }
    }
}
