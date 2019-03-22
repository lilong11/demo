<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\works;
use App\Http\Requests\WorksStoreBlogPost;
class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        // 接收搜索的关键字
        $search = $request->input('search','');

        // 接收 搜索的 显示条数
        $count = $request->input('count',5);

        $work = new works;
        $works = $work->where('title','like','%'.$search.'%')->paginate($count); 

        return view('Admin.works.index',['search'=>$search,'count'=>$count,'title'=>'文章列表','works'=>$works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.works.create',['title'=>'文章添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorksStoreBlogPost $request)
    {
        //文章添加处理 
        $user = new works;

        $user->title = $request->input('title','');
        $user->status = $request->input('status','');
        $user->content = $request->input('content','');
        // 执行添加到数据库
        $res1 = $user->save();
        // dump($res1);
        if($res1){

            return redirect('works')->with('success','添加成功');
        }else{

            return redirect('works')->with('error','添加失败');
        }
        // dump($request->except('_token'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dump($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dump($id);
        $data = works::find($id);
        return view('Admin.works.edit',['title'=>'文章修改','data'=>$data]);
    }

    public function delete($id)
    {
        // 文章删除
        $bool = works::destroy($id);
        if($bool){

            return redirect('works')->with('success','文章删除成功');
        }else{

            return redirect('works')->with('error','文章删除失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dump($id);
    }
}
