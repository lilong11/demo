<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Orders;
use App\Models\Orderdetail;


class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //把session中的信息拿出来  添加到数据库中
        $uid = session('uid');
        $number = session('number');
        $oprice = session('oprice');
        $aid = session('aid');
        $oid = session('oid');
        $gnum = session('gnum');
        $gid = session('gid');
        // dump($gid);
        // dump($gnum);
        
        
        //添加到订单表中
        $Orders = new Orders;
        $Orders->uid = $uid;
        $Orders->number = $number;
        $Orders->oprice = $oprice;
        $Orders->oid = $oid;
        $Orders->aid = $aid;
        $Orders->status = 0; //订单状态为等待支付
        $Orders->save();
        

        //循环数组中的所有商品  并添加到订单详情表中
        
        foreach ($gid as $k1=>$v1) {
            $gid1 = $v1->id;    //单个商品id
            $gnum1 = $gnum[$k1];    //单个商品数量
            $Orderdetail = new Orderdetail;
            $Orderdetail->oid = $oid;
            $Orderdetail->gid = $gid1;
            $Orderdetail->gnum = $gnum1;
            //添加时间  需要在数据表中添加created_at updated_at 字段  datetime 格式  然后在model中添加 public $timestamps = true;  不写也可以  默认是添加时间的意思
            $Orderdetail->save();
        }

        return view('Home.pay.pay',['oid'=>$oid]);
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
        $res = DB::table('orders')->where('oid', $id)->update(['status' => 1]);

        if($res){
            //判断支付成功  然后跳转到个人中心订单页面
            echo '<script>alert("支付成功");location="/index/orders"</script>';
        }else{ 
            echo '<script>alert("支付失败");location="/index/orders"</script>';
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
        //
    }
}
