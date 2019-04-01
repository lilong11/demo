<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Goods_sizes;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('home')) {
           
        
        //查询出购物车表里的全部数据
        $home = session('home');
        $cart = DB::table('cart')->where('uname','=',$home)->get();
        $cart1 = DB::table('cart')->where('uname','=',$home)->first();

        // dd($cart);
        //判断购物车里有没有商品  有的话执行下面的
        if(!isset($cart1)){
             return view('Home.cart.cart');
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
        // dump($arr5);

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

         //友情链接
        $links = DB::table('links')->get();

        return view('Home.cart.cart',['arr'=>$array1,'arr1'=>$arr1,'total'=>$total2,'num'=>$num,'size'=>$arr5,'links'=>$links]);
        

        }

    }else{
            echo '<script>alert("您还没有登录,请先登录账号");location="/users/login"</script>';
        }
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
    public function store()
    {
        
        $data = $_POST;
        $size = ($data['size']);
        $gid = ($data['gid']);
        $uname = ($data['uname']);
        //添加到购物车操作
        // dump($id);
        // dump($uname);
        $cart = new Cart;
        // ($cart);
        $cart->uname = $uname;
        $cart->size = $size;
        $res = DB::table('cart')->where('size',$size)->where('gid',$gid)->where('uname',$uname)->first();

        //判断商品是否是第一次加入购物车
        if ($res){
            $n =$res->num ;
            $n++;
            $result = DB::table('cart')->where('gid',$gid)->where('size',$size)->update(['num'=>$n]);
            // dump(1);
            
        }else{
            $cart->gid = $gid;
            $cart->num = 1;
            $res = $cart->save();

            echo $res;
            // dump(2);
            
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
    
    // 购物车商品删除操作
    public function destroy($id,$size)
    {
        $res = DB::table('cart')->where('uname', '=', session('home'))->where('gid','=',$id)->where('size','=',$size)->delete();
        
        if ($res) {
            return redirect('/cart')->with('success','删除成功');

        }else{
            return redirect('/cart')->with('success','删除失败');


        }
          
    }

    //购物车商品减少操作
    public function jian($id,$size,$num)
    {

        $n=$num-1;
        $res1 = DB::table('cart') ->where('gid',$id) ->where('size',$size)->where('uname',session('home'))->update(['num'=>$n]);
        if ($res1==1) {
                return redirect('/cart'); 
       }
    }

    //购物车商品增加操作
    public function jia($id,$size,$num)
    {
        $n=$num+1;
        $res = DB::table('cart') ->where('gid',$id) ->where('size',$size)->where('uname',session('home'))->update(['num'=>$n]);
        if ($res==1) {
                return redirect('/cart');
       }
    }

}
