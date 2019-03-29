<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Goods;
use App\Models\Type;


class TicketController extends Controller
{

    public function getType()
    {
        $type_data = Type::select('*',DB::raw('concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        foreach($type_data as $key=>$value){
            
            $n = substr_count($value->path,',');
            $type_data[$key]->tname = str_repeat('|---',$n).$value->tname;
        }
        return $type_data;
    }
    /**
     * 优惠券列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Ticket.index',['title'=>'优惠券列表']);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Ticket.create',['title'=>'优惠券添加','type_data'=>self::getType()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump($request);
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
