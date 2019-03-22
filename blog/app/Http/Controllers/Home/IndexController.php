<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Slid;
use App\Models\adv;
use App\Models\notice;
use App\Models\mess;
use DB;

class IndexController extends Controller
{






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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



        //adv表没有
        return view('Home.Index.index',['title'=>'哈哈商城','type_data'=>$yiji_data,'slids_data'=>$slids_data,'new_goods'=>$new_goods,'adv'=>$adv,'notice'=>$notice]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.Users.create',['title'=>'哈哈商城注册']);
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
