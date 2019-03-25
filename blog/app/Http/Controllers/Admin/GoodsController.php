<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsStoreRequest;
use App\Models\Goods;
use App\Models\Type;
use DB;
use Illuminate\Support\Facades\Storage;

class GoodsController extends Controller
{
    public function getType()
    {
        $type_data = Type::select('*',DB::raw('concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        foreach($type_data as $key=>$value){
            
            $n = substr_count($value->path,',');
            $type_data[$key]->tname = str_repeat('|---',$n).$value->tname;
        }
        return $type_data;
    }
    public function index()
    {
        //设置商品排版id
        $id = 1;
        //获取全部商品
        $goods_data = DB::select("select * from goods");
        return view('Admin.Goods.goods',['goods_data'=>$goods_data,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //商品添加
    public function create()
    {
        // echo '123';
        return view('Admin.Goods.add',['type_data'=>self::getType()]);
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
        //接收文件上传对象
        $file = $request->file('pic');
        $file_name = $file->store('goods_imgs');
        //把数据压入到数据库
        // dump($request->all());
        $request->except(['_token']);
        $goods = new Goods;
        $goods->gname = $request->input('gname','');
        $goods->tid = $request->input('tid','');
        $goods->price = $request->input('price','');
        $goods->goodsDes = $request->input('goodsDes','');
        $goods->goodsNum = $request->input('goodsNum','');
        $goods->pic = $file_name;
        $goods->goodsState = 1;
        $res = $goods->save();
        // dump($res);
        // dump($goods);
        //判断商品是否添加成功
        if($res){
            DB::commit();
            return redirect('/goods')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('/goods')->with('error','添加失败');

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
        $goods_data = DB::table('goods')->where('id',$id)->first();
        //刪除商品图片
        $pic = $goods_data->pic;
        Storage::delete($pic);
        //获取修改分类的tid
        $tid = $goods_data->tid;
        // dump($goods_data->id);
        return view('Admin.Goods.edit',['goods_data'=>$goods_data,'type_data'=>self::getType(),'tid'=>$tid]);

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
        $goods_datas = DB::table('goods')->where('id',$id)->update($goods_data);
        //判断商品是否修改成功
        if($goods_datas == 1){
            DB::commit();
            return redirect('/goods')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/goods')->with('error','修改失败');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

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
        $delete = DB::table('goods')->where('id',$id)->delete();
        //判断商品是否删除成功
        if($delete == 1){
            DB::commit();
            return redirect('/goods')->with('success','删除成功');
        }else{
            DB::rollBack();
            return redirect('/goods')->with('error','删除失败');

        }
    }
}
