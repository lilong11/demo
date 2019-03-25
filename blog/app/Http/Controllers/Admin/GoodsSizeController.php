<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GoodsSize;
use DB;

class GoodsSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //设置尺寸排版id
        $id = 1;
        //获取全部尺寸
        $goods_data = DB::select("select * from goods_sizes");
        return view('Admin.GoodsSize.goodssize',['goods_data'=>$goods_data,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //服饰尺寸的添加
        return view('Admin.GoodsSize.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 事务开启
        DB::beginTransaction();
        //把数据压入到数据库
        // dump($request->all());
        $request->except(['_token']);
        $goods = new GoodsSize;
        $goods->gsizename = $request->input('gsizename','');
        $goods->status = 1;
        $res = $goods->save();
        // dump($res);
        // dump($goods);
        //判断商品是否添加成功
        if($res){
            DB::commit();
            return redirect('/goodssize')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('/goodssize')->with('error','添加失败');

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
        //删除商品
        $delete = DB::table('goods_sizes')->where('id',$id)->delete();
        //判断商品是否删除成功
        if($delete == 1){
            DB::commit();
            return redirect('/goodssize')->with('success','删除成功');
        }else{
            DB::rollBack();
            return redirect('/goodssize')->with('error','删除失败');
        }
    }
}
