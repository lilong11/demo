<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewDetailsGoods;
use DB;
use Storage;

class NewDetailsGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取详情数据
        $details_goods = DB::table('new_details_goods')->get();
        // dump($details_goods);
        //获取颜色,尺寸,图片数据,并切割字符串
        foreach($details_goods as $k=>$v){
            // $gcolor[] = explode('&&',$v->gcolor);
            $gsize[] = explode('&&',$v->gsize);
            $goodsDePic[] = explode('&&',$v->goodsDePic);
        }
        // dump($gcolor);
        // $gcolors = $gcolor;
        if(empty($gsize)){
            return '<h1>暂无数据请添加</h1>3秒后自动跳转,如不跳转请点击<a href="newgoods">返回</a><meta http-equiv="refresh" content="3;URL=newgoods">';

        }
        //获取服装颜色
        // foreach($gcolor as $k=>$v){
        //     for($i=0;$i<count($v);$i++){
        //     $gcolor_datas[$k][] = DB::table('goods_colors')->where('id',$v[$i])->first();
        //     }
        // }
        // dump($gcolor_datas);
        // dump($gcolor_datas);
        
        //获取服装尺寸
        foreach($gsize as $k=>$v){
            for($i=0;$i<count($v);$i++){
            $gsize_datas[$k][] = DB::table('goods_sizes')->where('id',$v[$i])->first();
            }
        }
        // dump($goodsDePic);
        // dump($details_goods);
        // exit;
        $gid = -1;
        $id = 1;
        return view('Admin.NewDetailsGoods.newdetailsgoods',['details_goods'=>$details_goods,'gsize_datas'=>$gsize_datas,'goodsDePic'=>$goodsDePic,'id'=>$id,'gid'=>$gid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $goods_color = DB::table('goods_colors')->get();
        $goods_size = DB::table('goods_sizes')->get();
        $id = $request->all();
        //商品详情的添加
        return view('Admin.NewDetailsGoods.add',['id'=>$id,'goods_size'=>$goods_size]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('pic');
        $filePath =[];  // 定义空数组用来存放图片路径
        foreach ($file as $key => $value) {
            if(!empty($value)){//此处防止没有多文件上传的情况
            $allowed_extensions = ["png", "jpg","jpeg", "gif"];
            if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                    exit('您只能上传PNG、JPG或GIF格式的图片！');
            }
            $destinationPath = '/uploads/goods_details'; // public文件夹下面uploads/xxxx-xx-xx 建文件夹
            $extension = $value->getClientOriginalExtension();   // 上传文件后缀
            $fileName = date('YmdHis').mt_rand(100,9999).'.'.$extension; // 重命名
             $value->move(public_path().$destinationPath, $fileName); // 保存图片
            $filePath[] = $destinationPath.'/'.$fileName; 

            }
        }
        // 获取上传图片路径，切割成字符串,用于保存到数据库中
        $details_img = implode('&&',$filePath);
        //获取上传数据
        $data = $request->all();
        // dump($details_img);
        // 获取服装颜色，切割成字符串,用于保存到数据库中
        // $gcolor = $data['gcolor'];
        // $details_color = implode('&&',$gcolor);
        // 获取服装尺寸，切割成字符串,用于保存到数据库中
        $gsize = $data['gsize'];
        $details_size = implode('&&',$gsize);
        // dump($request->all());
        //事务开启
        DB::beginTransaction();
        //把数据压入到数据库
        $request->except(['_token']);
        $details_goods = new NewDetailsGoods;
        $details_goods->gid = $request->input('gid','');
        $details_goods->content = $request->input('content','');
        // $details_goods->gcolor = $details_color;
        $details_goods->gsize = $details_size;
        $details_goods->GoodsDePic = $details_img;
        $details_goods->status = 1;
        // dd($details_goods);
        $res = $details_goods->save();
        //判断商品是否添加成功
        if($res){
            DB::commit();
            return redirect('/newdetailsgoods')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('/newdetailsgoods')->with('error','添加失败');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //获取修改id
        $id = $request->all();
        //获取详情数据
        //获取图片路径
        $details_goods = DB::table('new_details_goods')->where('id',$id)->get();
        // dump($details_goods);
        foreach($details_goods as $k=>$v){
            $pic = $v->goodsDePic;
        }
        $goodsDePic_data = explode('&&',$pic);
        // dump($goodsDePic_data);
        $count = count($goodsDePic_data);
        //刪除商品图片
        for($i = 0;$i < $count;$i++){
            // dump($goodsDePic_data[$i]);
            $a = preg_match('#[0-9]{4,}.jpg#i', $goodsDePic_data[$i], $mc);
            // dump($mc);
            for($j=0;$j<count($mc);$j++){
                $pic = 'goods_details/'.$mc[$j];
                $res = Storage::delete($pic);
                // dump($res);
            }
            
        }
        //获取服装颜色
        // $goods_color = DB::table('goods_colors')->get();
        //获取服装尺寸
        $goods_size = DB::table('goods_sizes')->get();
        //获取详情数据
        $details_data = DB::table('new_details_goods')->where('id',$id)->first();
        return view('Admin.NewDetailsGoods.edit',['details_data'=>$details_data,'goods_size'=>$goods_size]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $file = $request->file('goodsDePic');
        $filePath =[];  // 定义空数组用来存放图片路径
        foreach ($file as $key => $value) {
            if(!empty($value)){//此处防止没有多文件上传的情况
            $allowed_extensions = ["png", "jpg","jpeg", "gif"];
            if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                    exit('您只能上传PNG、JPG或GIF格式的图片！');
            }
            $destinationPath = '/uploads/goods_details'; // public文件夹下面uploads/xxxx-xx-xx 建文件夹
            $extension = $value->getClientOriginalExtension();   // 上传文件后缀
            $fileName = date('YmdHis').mt_rand(100,9999).'.'.$extension; // 重命名
             $value->move(public_path().$destinationPath, $fileName); // 保存图片
            $filePath[] = $destinationPath.'/'.$fileName; 

            }
        }
        // 获取上传图片路径，切割成字符串,用于保存到数据库中
        $details_img = implode('&&',$filePath);
        //获取上传数据
        $data = $request->all();
        // dump($details_img);
        // 获取服装颜色，切割成字符串,用于保存到数据库中
        // $gcolor = $data['gcolor'];
        // $details_color = implode('&&',$gcolor);
        // 获取服装尺寸，切割成字符串,用于保存到数据库中
        $gsize = $data['gsize'];
        $details_size = implode('&&',$gsize);

        //把数据压入到数组中
        unset($data['_token']);
        // $data['gcolor'] = $details_color;
        $data['gsize'] = $details_size;
        $data['goodsDePic'] = $details_img;
        //获取id
        $id = $data['id'];
        //把数据压入到数据库中
        $detailsgoods_datas = DB::table('new_details_goods')->where('id',$id)->update($data);
        //判断商品是否修改成功
        if($detailsgoods_datas == 1){
            DB::commit();
            return redirect('/newdetailsgoods')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/newdetailsgoods')->with('error','修改失败');

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
    public function destroy($id)
    {
        //获取详情数据
        //获取图片路径
        $details_goods = DB::table('new_details_goods')->where('id',$id)->get();
        // dump($details_goods);
        foreach($details_goods as $k=>$v){
            $pic = $v->goodsDePic;
        }
        $goodsDePic_data = explode('&&',$pic);
        // dump($goodsDePic_data);
        $count = count($goodsDePic_data);
        //刪除商品图片
        for($i = 0;$i < $count;$i++){
            // dump($goodsDePic_data[$i]);
            $a = preg_match('#[0-9]{4,}.jpg#i', $goodsDePic_data[$i], $mc);
            // dump($mc);
            for($j=0;$j<count($mc);$j++){
                $pic = 'goods_details/'.$mc[$j];
                $res = Storage::delete($pic);
                // dump($res);
            }
            
        }
        // exit;
        
        
        //删除商品
        $delete = DB::table('new_details_goods')->where('id',$id)->delete();
        //判断商品是否删除成功
        if($delete == 1){
            DB::commit();
            return redirect('/newdetailsgoods')->with('success','删除成功');
        }else{
            DB::rollBack();
            return redirect('/newdetailsgoods')->with('error','删除失败');

        }
    }
}
