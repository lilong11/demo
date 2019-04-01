<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Background;
use Illuminate\Support\Facades\Storage;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $Background = new Background;
        $Backgrounds = $Background->paginate(5); 
        return view('Admin.Background.index',['title'=>'文章列表','Backgrounds'=>$Backgrounds,'i'=>$i]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Background.add',['title'=>'背景添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收文件上传对象
        $file = $request->file('img');
        $file_name = $file->store('background');

        $Background = new Background;
        $Background->img = $file_name;
        $bool = $Background->save();
        if($bool){
            echo '<script>alert("添加成功");location="/background"</script>'; 
        }else{
            echo '<script>alert("添加失败!");location="/background"</script>'; 
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
        return view('Admin.Background.edit',['title'=>'背景修改','id'=>$id]);
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
        // dd($request->all());
        //接收文件上传对象
        $file = $request->file('img');
        $file_name = $file->store('background');
        
        $users = Background::find($id);
        $users->img = $file_name;
        $bool = $users->save();    
        if($bool){ 
            echo '<script>alert("背景修改成功.");location="/background"</script>'; 
        }else{
            echo '<script>alert("背景修改失败!");location="/background"</script>'; 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exit($id)
    {
        $bool = Background::destroy($id);
        if($bool){ 
            echo '<script>alert("背景删除成功.");location="'.$_SERVER['HTTP_REFERER'].'"</script>'; 
        }else{
            echo '<script>alert("背景删除失败!");location="/background"</script>'; 
        }
        // dump($id);
    }
}
