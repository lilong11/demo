<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StatusController extends Controller
{
    //修改商品状态
    public function goods(Request $request)
    {
    	//获取id
    	$id = $request->all();
    	//获取商品状态
    	$goods = DB::table('goods')->where('id',$id)->get();
    	// dump($goods);
   		foreach($goods as $k=>$v){
   			$status = $v->goodsState;
   		}
   		// dump($status);
    	//判断状态,修改商品状态
    	if($status == 1){
    		$res = DB::table('goods')->where('id',$id)->update(['goodsState' => 0]);
    	}else{
    		$res = DB::table('goods')->where('id',$id)->update(['goodsState' => 1]);
    	}
    	
    	//判断商品状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/goods')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/goods')->with('error','修改失败');

        }
    }
    //修改分类状态
    public function type(Request $request)
    {
    	//获取id
    	$id = $request->all();
    	//获取分类状态
    	$data = DB::table('types')->where('id',$id)->get();
    	// dump($goods);
   		foreach($data as $k=>$v){
   			$status = $v->status;
   		}
   		// dump($status);
    	//判断状态,修改分类状态
    	if($status == 1){
    		$res = DB::table('types')->where('id',$id)->update(['status' => 0]);
    	}else{
    		$res = DB::table('types')->where('id',$id)->update(['status' => 1]);
    	}
    	
    	//判断分类状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/type')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/type')->with('error','修改失败');
        }
    }
    //修改轮播图状态
    public function rotationimg(Request $request)
    {
    	//获取id
    	$id = $request->all();
    	//获取轮播图状态
    	$data = DB::table('slids')->where('sid',$id)->get();
    	// dump($goods);
   		foreach($data as $k=>$v){
   			$status = $v->status;
   		}
   		// dump($status);
    	//判断状态,修改轮播图状态
    	if($status == 1){
    		$res = DB::table('slids')->where('sid',$id)->update(['status' => 0]);
    	}else{
    		$res = DB::table('slids')->where('sid',$id)->update(['status' => 1]);
    	}
    	
    	//判断轮播图状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/rotationimg')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/rotationimg')->with('error','修改失败');
        }
    }
    //修改最新商品状态
    public function newgoods(Request $request)
    {
    	//获取id
    	$id = $request->all();
    	//获取最新商品状态
    	$data = DB::table('new_goods')->where('id',$id)->get();
    	// dump($goods);
   		foreach($data as $k=>$v){
   			$status = $v->goodsState;
   		}
   		// dump($status);
    	//判断状态,修改最新商品状态
    	if($status == 1){
    		$res = DB::table('new_goods')->where('id',$id)->update(['goodsState' => 0]);
    	}else{
    		$res = DB::table('new_goods')->where('id',$id)->update(['goodsState' => 1]);
    	}
    	
    	//判断最新商品状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/newgoods')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/newgoods')->with('error','修改失败');
        }
    }
    //修改商品详情状态
    public function detailsgoods(Request $request)
    {
        //获取id
        $id = $request->all();
        //获取商品详情状态
        $data = DB::table('details_goods')->where('id',$id)->get();
        // dump($goods);
        foreach($data as $k=>$v){
            $status = $v->status;
        }
        // dump($status);
        //判断状态,修改商品详情状态
        if($status == 1){
            $res = DB::table('details_goods')->where('id',$id)->update(['status' => 0]);
        }else{
            $res = DB::table('details_goods')->where('id',$id)->update(['status' => 1]);
        }
        
        //判断商品详情状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/detailsgoods')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/detailsgoods')->with('error','修改失败');
        }
    }
    //修改服饰颜色状态
    public function goodscolor(Request $request)
    {
    	//获取id
    	$id = $request->all();
    	//获取服饰颜色状态
    	$data = DB::table('goods_colors')->where('id',$id)->get();
    	// dump($goods);
   		foreach($data as $k=>$v){
   			$status = $v->status;
   		}
   		// dump($status);
    	//判断状态,修改服饰颜色状态
    	if($status == 1){
    		$res = DB::table('goods_colors')->where('id',$id)->update(['status' => 0]);
    	}else{
    		$res = DB::table('goods_colors')->where('id',$id)->update(['status' => 1]);
    	}
    	
    	//判断服饰颜色状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/goodscolor')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/goodscolor')->with('error','修改失败');
        }
    }
    //修改服饰尺寸状态
    public function goodssize(Request $request)
    {
    	//获取id
    	$id = $request->all();
    	//获取服饰尺寸状态
    	$data = DB::table('goods_sizes')->where('id',$id)->get();
    	// dump($goods);
   		foreach($data as $k=>$v){
   			$status = $v->status;
   		}
   		// dump($status);
    	//判断状态,修改服饰尺寸状态
    	if($status == 1){
    		$res = DB::table('goods_sizes')->where('id',$id)->update(['status' => 0]);
    	}else{
    		$res = DB::table('goods_sizes')->where('id',$id)->update(['status' => 1]);
    	}
    	
    	//判断服饰尺寸状态是否修改成功
        if($res){
            DB::commit();
            return redirect('/goodssize')->with('success','修改成功');
        }else{
            DB::rollBack();
            return redirect('/goodssize')->with('error','修改失败');
        }
    }
}
