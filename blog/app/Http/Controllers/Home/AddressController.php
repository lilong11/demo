<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询出购物车表里的全部数据
        $home = session('home');
        $cart = DB::table('cart')->where('uname','=',$home)->get();

        
        //取出gid -----商品ID
        foreach($cart as $k=>$v){
           $arr[$k] = $v->gid;
        }
        
        //取出num ----商品数量
        foreach($cart as $k=>$v){
           $arr1[$k] = $v->num;
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
        dump(session('uid'));
        
        //收货地址信息
        $address2 = DB::table('address')->where('uid','=',session('uid'))->get();
        
        


        return view('Home.address.address',['arr'=>$array1,'arr1'=>$arr1,'total'=>$total2,'num'=>$num,'address'=>$address2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        // dump($request->all());
        $shen = ($request->shen);
        $shi = ($request->shi);
        $qu = ($request->qu);
        $shen = DB::table('district')->where('num','=',$shen)->get();
        $shi = DB::table('district')->where('num','=',$shi)->get();
        $qu = DB::table('district')->where('num','=',$qu)->get();

        $uid = session('uid');
        $name = ($request->name);
        $phone = ($request->phone);
        $addr1 = ($shen[0]->name).($shi[0]->name).($qu[0]->name).($request->addr_info);
        
        dump($addr1);

        $Address = new Address;
        $Address->uid = $uid;
        $Address->name = $name;
        $Address->phone = $phone;
        $Address->address = $addr1;
        
        // 判断是否是第一次添加地址
        $result = DB::table('address')->where('uid',$uid)->first();
        if ($result){
            $Address->isStaAdd = 0;
        } else{
            $Address->isStaAdd = 1;
        }
        $Address->save();

        return  back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $req = $request['address'] ;
        
        session(['address'=>$req]);
        dump(session('address'));
        return  back();
        
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
    public function update(Request $request)
    {
        
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
