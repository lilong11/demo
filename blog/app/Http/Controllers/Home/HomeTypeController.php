<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->all();
        //获取一级分类
        $type_data = DB::table('types')->where('id',$id)->get();

        //通过一级分类 获取二级分类
        foreach($type_data as $key=>$value){
            //$value->id; 一级分类的id
            $erji_data = DB::table('types')->where('pid',$value->id)->get();
            // dump($erji_data);
        }
        foreach($erji_data as $k=>$v){
            $erji[] = $v->id;
        }
        for($i=0;$i<count($erji);$i++){
            $sanji_data = DB::table('types')->where('pid',$erji[$i])->get();
            foreach($sanji_data as $k=>$v){
                $sanji[] = $v->id;
            }
            dump($sanji);
            for($j=0;$j<count($sanji);$j++){
                dump($sanji[$j]);
                $goods_data = DB::table('goods')->where('tid',$id)->orWhere('tid',$erji[$i])->orWhere('tid',$sanji[$j])->get();
            }
            
        }
        dump($goods_data);
        // exit;
        // return view('Home.type.hometype',['goods_data'=>$goods_data]);
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
