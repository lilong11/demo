<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStoreRequest;
use App\Models\Type;
use DB;
class TypeController extends Controller
{
    public function getType()
    {
        // $type_data = DB::select("select *,concat(path,',',id) as paths from types order by path");
        $type_data = Type::select('*',DB::raw('concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        foreach($type_data as $key=>$value){
            
            $n = substr_count($value->path,',');
            $type_data[$key]->tname = str_repeat('|---',$n).$value->tname;
        }
        return $type_data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $type_data = Type::all();
        
        //加载模块
        return view('Admin.Type.type',['type_data'=>self::getType()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $id = $request->input('id','');
        // dump($id);
        $type_data = Type::all();
        return view('Admin.Type.add',['id'=>$id,'type_data'=>self::getType()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeStoreRequest $request)
    {
         // 事务开启
        DB::beginTransaction();
        //获取添加数据,压入数据库
        $type = new Type;
        $type->tname = $request->input('tname','');
        $type->pid = $request->input('pid','');
        $type->status = 1;
        //处理path
        if($request->input('pid','') == 0){
            $type->path = 0;
        }else{
            //获取父类的id
            $parent_data = Type::find($request->input('pid'));
            //父级分类的 path,id
            $type->path = $parent_data->path.','.$parent_data->id;
        }
        $res = $type->save();
        // dump($res);
         //判断商品是否添加成功
        if($res){
            //事务成功
            DB::commit();
            return redirect('/type')->with('success','添加成功');
        }else{
            //事务回滚
            DB::rollBack();
            return redirect('/type')->with('error','添加失败');

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
        //检查当前分类是否有子类
        $child_data = Type::where('pid',$id)->first();
        if($child_data){
            return back()->with('error','当前分类有子类,不允许删除');
            exit;
        }

        //删除分类
        if(Type::destroy($id)){
            return redirect('/type')->with('success','删除成功');
        }else{
             return redirect('/type')->with('error','删除失败');
        }
        
    }
}
