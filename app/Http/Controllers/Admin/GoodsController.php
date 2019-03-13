<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsStoreRequest;
use App\Models\Goods;
use DB;

class GoodsController extends Controller
{
    public function index()
    {
        //
        return view('Admin.Goods.goods');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //商品添加
    public function create()
    {
        return view('Admin.Goods.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //商品添加接收
    public function store(GoodsStoreRequest $request)
    {
        // 事务开启
        DB::beginTransaction();
        //把数据压入到数据库
        dump($request->all());
        $request->except(['_token']);
        $goods = new Goods;
        $goods->gname = $request->input('gname','');
        $goods->tid = 1;
        $goods->price = $request->input('price','');
        $goods->goodsDes = $request->input('goodsDes','');
        $goods->goodsNum = $request->input('goodsNum','');
        $goods->pic = '12121212121212';
        $goods->goodsState = 1;
        $res = $goods->save();
        // dump($res);
        // dump($goods);
        //判断商品是否添加成功
        if($res){
            DB::commit();
            return redirect('admin/goods')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('admin/goods')->with('error','添加失败');

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
