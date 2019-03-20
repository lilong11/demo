<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewGoodsStoreRequest;
use App\Models\Type;
use App\Models\NewGoods;
use DB;
use Illuminate\Support\Facades\Storage;

class NewGoodsController extends Controller
{
    public function getType()
    {
        //获取最新商品的分类
        $type_data = DB::table('types')->where('tname','最新商品')->get();
        return $type_data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //设置商品排版id
        $id = 1;
        //获取全部商品
        $newgoods_data = DB::select("select * from new_goods");
        return view('Admin.NewGoods.newgoods',['newgoods_data'=>$newgoods_data,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(DB::table('new_goods')->count() >= 8){
            return redirect('/newgoods')->with('error','添加失败,最新商品最多8件商品');
        }
        //最新商品添加
        return view('Admin.NewGoods.add',['type_data'=>self::getType()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewGoodsStoreRequest $request)
    {
        // 事务开启
        DB::beginTransaction();
        //接收文件上传对象
        $file = $request->file('pic');
        $file_name = $file->store('goods_imgs');
        //把数据压入到数据库
        // dump($request->all());
        $request->except(['_token']);
        $goods = new NewGoods;
        $goods->gname = $request->input('gname','');
        $goods->tid = $request->input('tid','');
        $goods->price = $request->input('price','');
        $goods->goodsNum = $request->input('goodsNum','');
        $goods->pic = $file_name;
        $goods->goodsState = 1;
        $res = $goods->save();
        // dump($res);
        // dump($goods);
        //判断商品是否添加成功
        if($res){
            DB::commit();
            return redirect('/newgoods')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('/newgoods')->with('error','添加失败');

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
        //编辑修改商品
        //获取修改商品的id
        $id = $request->input('id','');
        // dump($id);
        $goods_data = DB::table('new_goods')->where('id',$id)->first();
        //刪除商品图片
        $pic = $goods_data->pic;
        Storage::delete($pic);
        //获取修改分类的tid
        $tid = $goods_data->tid;
        // dump($goods_data->id);
        return view('Admin.NewGoods.edit',['goods_data'=>$goods_data,'type_data'=>self::getType(),'tid'=>$tid]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         //接收文件上传对象
        $file = $request->file('pic');
        $file_name = $file->store('goods_imgs');
        //修改商品压入数据库
        //获取修改商品的id
        $id = $request->input('id','');
        // $request->except(['_token']);
        $goods_data = $request->except('_token');
        $goods_data['id'] = $id;
        $goods_data['pic'] = $file_name;
        $goods_datas = DB::table('new_goods')->where('id',$id)->update($goods_data);
        //判断商品是否修改成功
        if($goods_datas == 1){
            DB::commit();
            return redirect('/newgoods')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/newgoods')->with('error','修改失败');

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
        $pic = $request->input('pic','');
        // dump($pic)
        //刪除商品图片
        // $pic = $goods_data->pic;
        Storage::delete($pic);
        //删除商品
        $delete = DB::table('new_goods')->where('id',$id)->delete();
        //判断商品是否删除成功
        if($delete == 1){
            DB::commit();
            return redirect('/newgoods')->with('success','删除成功');
        }else{
            DB::rollBack();
            return redirect('/newgoods')->with('error','删除失败');

        }
    }
}
