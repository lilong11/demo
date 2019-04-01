<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\works;
use App\Models\Issues;

class WorksController extends Controller
{
    /**
     * 显示问题列表
     */
    public function index()
    {
        $issue = new Issues; //查问题表
        $status = 0;
        $issues = $issue->where('status',0)->get(); 
        // dd($issues);

        // return view('Home.issue.index',['issues'=>$issues,'title'=>'问题列表']);     

         //友情链接
        $links = DB::table('links')->get();

        return view('Home.issue.index',['issues'=>$issues,'title'=>'问题列表','links'=>$links]);
           

    }

    /**
     * 显示文章列表
     */
    public function works()
    {
        $works = new works; //查文章表
        $status = 0;
        $workss = $works->where('status',0)->get(); 
        return view('Home.works.works',['workss'=>$workss,'title'=>'文章列表']);     
    }



    /**
     * 显示文章和问题
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = new works; //查文章表
        $works = $work->where('status',0)->get();  


        $issue = new Issues; //查问题表
        $issues = $issue->where('status',0)->get(); 
 
       $workShow = $work->find($id);
         //友情链接
        $links = DB::table('links')->get();

        return view('Home.works.index',['works'=>$works,'issues'=>$issues,'workShow'=>$workShow,'links'=>$links]);  
    }


    /**
     * 显示问题
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function issue($id)
    {
        // dump($id);
        $work = new works; //查文章表
        $works = $work->where('status',0)->get();  


        $issue = new Issues; //查问题表
        $issues = $issue->where('status',0)->get(); 

        // dump($id);
       $workShow = $issue->find($id);
       // dump($workShow);   
        //友情链接
        $links = DB::table('links')->get();

        return view('Home.works.index',['works'=>$works,'issues'=>$issues,'workShow'=>$workShow,'links'=>$links]);
    }

    public function add()
    {
        // dump($id);
        $work = new works; //查文章表
        $works = $work->where('status',0)->get();  


        $issue = new Issues; //查问题表
        $issues = $issue->where('status',0)->get(); 
         //友情链接
        $links = DB::table('links')->get();

        return view('Home.issue.add',['works'=>$works,'issues'=>$issues,'links'=>$links]);
    }

    public function doAdd(Request $request)
    {
        $Issues = new Issues;
        $Issues->title = $request['title'];
        $Issues->status = 2;
        $Issues->uname = session('home');
        // dd($Issues);
       $bool = $Issues->save();
        // dump($bool);

        if($bool){
             echo '<script>alert("问题已提交管理员审核.");location="/hissues"</script>';
        }else{  
             echo '<script>alert("问题申请失败!");location="/issuesAdd"</script>'; 
        }
    }

    // 用户问题显示
    public function userIssue($uname)
    {
        // dump($uname);
        $Issues = new Issues;
        $data = $Issues->where('uname',$uname)->get();  
        return view('Home.issue.userissue',['title'=>'我的问题中心','data'=>$data]);

    }
    
    
}
