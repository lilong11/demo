<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use DB;

class HomeGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->filled('id');
        $data = $request->all();
        $search = $request->input('search','');
        // dump($id);
        if($id){
            $tid = $data['id'];
            $goods = Goods::where('gname','like','%'.$search.'%')->where('tid',$tid)->paginate(16);
            // dump($goods);
            return view('Home.goods.homegoods',['goods'=>$goods]);
        }
        
            // exit;
            //商城遍历
        // $goods = DB::table('goods')->where('goodsState',1)->get();
        //商城遍历
        $goods = Goods::where('gname','like','%'.$search.'%')->paginate(16);
        //  dump($goods);
        return view('Home.goods.homegoods',['goods'=>$goods]);
       
        
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
