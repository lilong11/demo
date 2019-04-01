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
        $i = 1;

        return view('Admin.works.index',['search'=>$search,'count'=>$count,'title'=>'文章列表','works'=>$works,'i'=>$i]);
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
        $works = new works;

        if(!empty($request->img)){
                    //接收文件上传对象
            $file = $request->file('img');
            $file_name = $file->store('works');
            $works->img = $file_name;
            $works->save();
        } 

        $works->title = $request->input('title','');
        $works->status = $request->input('status','');
        $works->content = $request->input('content','');
        // 执行添加到数据库
        $res1 = $works->save();
        // dump($res1);
        if($res1){
            echo '<script>alert("添加成功!");location="/works"</script>'; exit;
        }else{
            echo '<script>alert("添加失败!");location="/works/create"</script>'; exit;
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
        // dump($id);
        $data = works::find($id);
        return view('Admin.works.edit',['title'=>'文章修改','data'=>$data]);
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

        $works =  works::find($id);

        // 用户传过来的信息
        $data = $request->all();
        
        if(!empty($request->img)){
            $file = $request->file('img');
            $file_name = $file->store('works');
            $works->img = $file_name;
            $works->save();
        }
        
        $works->status = $data['status']; 
        $works->title = $data['title']; 
        $works->content = $data['content'];
        // dd($works);
        $bool = $works->save(); 

        if($bool){
            echo '<script>alert("文章.公告修改成功");location="/works"</script>'; 
        }else{
            echo '<script>alert("文章.公告修改失败!");location="/works/{{$id}}/edit"</script>'; 
        }

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

}
