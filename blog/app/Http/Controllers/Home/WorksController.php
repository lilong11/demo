<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\works;
use App\Models\Issues;
class WorksController extends Controller
{

    /**
     * 显示文章和问题
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = new works; //查文章表
        $works = $work->all();  


        $issue = new Issues; //查问题表
        $issues = $issue->all(); 

        // dump($id);
       $workShow = $work->find($id);
       // dump($data);

        return view('Home.works.index',['works'=>$works,'issues'=>$issues,'workShow'=>$workShow]);
    }


    /**
     * 显示问题
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function issue($id)
    {
        dump($id);
        $work = new works; //查文章表
        $works = $work->all();  


        $issue = new Issues; //查问题表
        $issues = $issue->all(); 

        // dump($id);
       $workShow = $issue->find($id);
       // dump($workShow);   

        return view('Home.works.index',['works'=>$works,'issues'=>$issues,'workShow'=>$workShow]);
    }

    
}
