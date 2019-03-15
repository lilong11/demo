<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slid;
use DB;
use Illuminate\Support\Facades\Storage;

class RotationimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //轮播排序id
        $id = 1; 
        //获取全部商品
        $rotationimg_data = DB::select("select * from slids");
        //轮播图视图
        return view('Admin.Rotationimg.rotationimg',['rotationimg_data'=>$rotationimg_data,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //轮播添加
        return view('Admin.Rotationimg.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //轮播数据,压入数据库
        // dump($request->all());
        //接收文件上传对象
        $file = $request->file('simg');
        $file_name = $file->store('simgs');
        // dump($file_name);
        //把数据压入到数据库
        // dump($request->all());
        $request->except(['_token']);
        $Rotationimg = new Slid;
        $Rotationimg->sname = $request->input('sname','');
        $Rotationimg->simg = $file_name;
        $Rotationimg->status = 1;
        $res = $Rotationimg->save();
        //判断轮播是否添加成功
        if($res){
            DB::commit();
            return redirect('/rotationimg')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('/rotationimg')->with('error','添加失败');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        //编辑修改轮播
        //获取修改轮播的id
        $sid = $request->input('sid','');
        // dump($id);
        $rotationimg_data = DB::table('slids')->where('sid',$sid)->first();
        //刪除轮播图片
        $pic = $rotationimg_data->simg;
        Storage::delete($pic);
        return view('Admin.Rotationimg.edit',['rotationimg_data'=>$rotationimg_data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //修改商品压入数据库
        //接收文件上传对象
        $file = $request->file('simg');
        $file_name = $file->store('simgs');
        //获取修改商品的id
        $sid = $request->input('sid','');
        // $request->except(['_token']);
        $rotationimg_data = $request->except('_token');
        $rotationimg_data['sid'] = $sid;
        $rotationimg_data['simg'] = $file_name;
        $rotationimg_datas = DB::table('slids')->where('sid',$sid)->update($rotationimg_data);
        //判断商品是否修改成功
        if($rotationimg_datas == 1){
            DB::commit();
            return redirect('/rotationimg')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/rotationimg')->with('error','修改失败');

        }
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
    public function destroy(Request $request,$id)
    {
        //获取图片路径
        $simg = $request->input('simg','');
        // dump($pic)
        //刪除商品图片
        // $pic = $goods_data->pic;
        Storage::delete($simg);
        //删除商品
        $delete = DB::table('slids')->where('sid',$id)->delete();
        //判断商品是否删除成功
        if($delete == 1){
            DB::commit();
            return redirect('/rotationimg')->with('success','删除成功');
        }else{
            DB::rollBack();
            return redirect('/rotationimg')->with('error','删除失败');

        }
    }
}
