<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Slid;
use App\Models\adv;
use App\Models\notice;
use App\Models\mess;
use App\Models\Links;
use DB;

class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取一级分类
        $yiji_data = Type::where('pid',0)->get();
        // dump($yiji_data);
        //通过一级分类 获取二级分类
        foreach($yiji_data as $key=>$value){
            //$value->id; 一级分类的id
            $erji_data = Type::where('pid',$value->id)->get();
            // dump($erji_data);
            $value['sub'] = $erji_data;
        }
        // dump($yiji_data);
        // dd(session('home')); 
        //获取轮播图
        $slids_data = Slid::get();
        // dump($slids_data);
    
        // 获取最新商品数据
        $new_goods = DB::table('new_goods')->get();
        // dump($new_goods);

        //yyl
        $adv = adv::all();
        $notice = notice::all();

        //友情链接
        $links = DB::table('links')->get();
        // dump($links);

        $goods = DB::table('goods')->get();

        // =====================判断是否登录=======================  
        if (session('home')){
        
        // =====================购物车信息开始=======================
        //查询出购物车表里的全部数据
        $home = session('home');
        $cart = DB::table('cart')->where('uname','=',$home)->get();
        $cart1 = DB::table('cart')->where('uname','=',$home)->first();

        //获取特色商品
        //adv表没有
        

 

        // dd($cart1);
        if (!isset($cart1)) {

            // return view('Home.Index.index',['title'=>'海天商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice,'goodss'=>$goodss]);  

              $goodss = DB::table('goods')->where('goodsState',1)->get();
            return view('Home.Index.index',['title'=>'哈哈商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice,'links'=>$links,'goodss'=>$goodss]);  

            
        }else{

        //取出gid -----商品ID
        foreach($cart as $k=>$v){
           $arr[$k] = $v->gid;
        }
        
        //取出num ----商品数量
        foreach($cart as $k=>$v){
           $arr1[$k] = $v->num;
        }
        //取出size
        foreach($cart as $k=>$v){

           $size = $v->size;
           // dump($size);
           $arr5[$k] = DB::table('goods_sizes')->where('id','=',$size)->first();
        }
        

        //通过商品ID 查询出商品表里的具体数据
        foreach ($arr as $key => $value) {
            $goods = DB::table('goods')->where('id','=',$value)->get();
            $array[] = $goods;
        }

        //把遍历出来的商品压成一个数组
        foreach ($array as $kk => $vv) {
            foreach ($vv as $kkk => $vvv) {
                    $array1[] = $vvv;
            }
        }

        //商品单价 * 数量
        foreach ($array1 as $k1 => $v1) {
            $total = ($v1->price)*($arr1[$k1]);
            $arr2[] = $total;
        }
        //商品总数量
        $num = 0;
        foreach ($array1 as $k1 => $v1) {
            $num += $arr1[$k1];
        }



        // 商品总价
        $total2=0;
        foreach ($arr2 as $k2 => $v2) {
            $total2 +=$v2;
        }

        // dump($array1);
        
        // =====================购物车信息结束=======================

    //     return view('Home.Index.index',['title'=>'海天商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice,'arr'=>$array1,'arr1'=>$arr1,'total'=>$total2,'num'=>$num,'size'=>$arr5]); 
    //     }
    // }else{
    //     return view('Home.Index.index',['title'=>'海天商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice]); 

        

         $goodss = DB::table('goods')->where('goodsState',1)->get();

        return view('Home.Index.index',['title'=>'哈哈商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice,'arr'=>$array1,'arr1'=>$arr1,'total'=>$total2,'num'=>$num,'size'=>$arr5,'links'=>$links,'goodss'=>$goodss]); 
        }
    }else{
        $goodss = DB::table('goods')->where('goodsState',1)->get();
        // dd($goodss);
        return view('Home.Index.index',['title'=>'哈哈商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice,'links'=>$links,'goodss'=>$goodss]); 



    }


}


        //获取特色商品
        
        //adv表没有



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.Users.create',['title'=>'海天商城注册']);
    }

}
