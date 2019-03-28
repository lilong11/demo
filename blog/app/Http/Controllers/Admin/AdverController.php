<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Adver;   
use DB;


class AdverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adver = adver::all(); //查询adver数据表里的全部数据
       // dump($adver);
        return view('Admin.adver.adver',['adver'=>$adver]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Adver.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $adver = new Adver;
        //接收文件上传对象
        $file = $request->file('apic');
        $file_name = $file->store('adver');
        $adver->apic = $file_name;
        $res = $adver->save();
        
            if($res){
                DB::commit();
                return redirect('/orders/adver')->with('success','添加成功'); //添加数据库成功后跳转到显示页面
            }else{
                DB::rollBack();
                return redirect('/orders/adver')->with('error','添加失败');
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
        if (Adver::destroy($id)) {
            return redirect('/orders/adver')->with('success','删除成功');
        }else{
            return redirect('/orders/adver')->with('success','删除失败');

        }
    }
}
