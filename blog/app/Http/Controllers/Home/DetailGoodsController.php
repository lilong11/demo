<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DetailGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //获取id
        $id = $request->all();
        $goods = DB::table('goods')->where('id',$id)->get();
        //商品详情
        $details_goods = DB::table('details_goods')->where('gid',$id)->get();
        //获取颜色,尺寸,图片数据,并切割字符串
        foreach($details_goods as $k=>$v){
            // $gcolor[] = explode('&&',$v->gcolor);
            $gsize[] = explode('&&',$v->gsize);
            $goodsDePic = explode('&&',$v->goodsDePic);
        }
        //判断是否有数据
        if(empty($gsize)){
            return '<h1>暂无数据,站长正在努力添加中</h1>3秒后自动跳转,如不跳转请点击<a href="/homegoods">返回</a><meta http-equiv="refresh" content="3;URL=/homegoods">';

        }
        //获取服装颜色
        // foreach($gcolor as $k=>$v){
        //     for($i=0;$i<count($v);$i++){
        //     $gcolor_datas[] = DB::table('goods_colors')->where('id',$v[$i])->first();
        //     }
        // }
        //获取服装尺寸
        foreach($gsize as $k=>$v){
            for($i=0;$i<count($v);$i++){
            $gsize_datas[] = DB::table('goods_sizes')->where('id',$v[$i])->first();
            }
        }
        // dump($goodsDePic);
        return view('Home.detailgoods.detailgoods',['goods'=>$goods,'details_goods'=>$details_goods,'gsize_datas'=>$gsize_datas,'goodsDePic'=>$goodsDePic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
