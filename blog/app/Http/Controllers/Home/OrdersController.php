<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Orders;
use App\Models\Orderdetail;
use App\Models\Users;
use App\Models\Goods;
use App\Models\Address;
use App\Models\Adver;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('home')) {
        
        //通过uid查询
        $uid = session('uid');
        $orders = DB::table('orders')->where('uid','=',$uid)->get();
        // dump($orders);
        foreach ($orders as $key => $value) {
            $v = $value->oid;
            $orderdetail[]= DB::table('orderdetail')->where('oid','=',$v)->get();
        }

        // dump($orderdetail);
        for ($i=0; $i <=$key ; $i++) { 
            $aaa = $orderdetail[$i];
            foreach ($aaa as $k1 => $v1) {
                $bbb = $v1->gid;
               $goods[$i][] = DB::table('goods')->where('id','=',$bbb)->first();
            };
        }
        // dump($goods);

        for ($a=0; $a <=$key ; $a++) { 
            $bbb = $orderdetail[$a];
            foreach ($bbb as $k6 => $v6) {
                $bbb = $v6->size;
               $size[$a][] = DB::table('goods_sizes')->where('id','=',$bbb)->first();
            };
        }
        // dump($size);

        foreach ($orders as $k3 => $v3) {
           $aid = $v3->aid;
           $oname[] = DB::table('address')->where('id','=',$aid)->first();
        }
        // dump($oname);


        //取出广告表中的数据
        $adver = adver::all(); //查询adver数据表里的全部数据
         //友情链接
        $links = DB::table('links')->get();

    return view('Home.Orders.orders',['orders'=>$orders,'orderdetail'=>$orderdetail,'goods'=>$goods,'oname'=>$oname,'adver'=>$adver,'size'=>$size,'links'=>$links]);

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
        $res = DB::table('orders')->where('oid', $id)->update(['status' => 3]);
        if($res){
            //判断确认收货成功  然后跳转到个人中心订单页面
            echo '<script>alert("订单已完成");location="/index/orders"</script>';
        }else{ 
            echo '<script>alert("确认收货失败");location="/index/orders"</script>';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = DB::table('orders')->where('oid', $id)->update(['status' => 4]);
        if($res){
            //判断取消订单成功  然后跳转到个人中心订单页面
            echo '<script>alert("取消订单成功");location="/index/orders"</script>';
        }else{ 
            echo '<script>alert("取消订单失败");location="/index/orders"</script>';
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
         
        $res = DB::table('orders')->where('oid', '=', $id)->delete();
        $res1 = DB::table('orderdetail')->where('oid', '=', $id)->delete();

        if($res||$res1){
            //判断删除订单成功  然后跳转到个人中心订单页面
            echo '<script>alert("订单已删除");location="/index/orders"</script>';
        }else{ 
            echo '<script>alert("订单删除失败");location="/index/orders"</script>';
        }
    }
}
