<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\investor;
class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    	public function delete($id)
    	{
    	    dump($id);
    	    $bool = investor::destroy($id);
	             if($bool){

		    return redirect('admin/investor')->with('success','投资人资料删除成功');
		}else{

		    return redirect('admin/investor')->with('error','投资人资料删除失败');
		}
    	}

	public function index()
	{
	   $investor = investor::all();
	    return view('Admin/investor/index',['investor'=>$investor]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('Admin/investor/create',['title'=>'添加投资人']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump('我是store方法,我负责接收添加的数据');
        // dump($request->all());
        // dump($request->name);
         // dd($request->input('sex',''));
        $investor = new investor;
        
        $investor->name = $request->input('name','');
        $investor->phone = $request->input('phone','');
        $investor->email = $request->input('email','');
        $hidden = $request->input('hidden','');
/*        if($request->input('sex')=='0'){
        	$investor->sex = '女';
        }elseif($request->input('sex')=='1'){
        	$investor->sex = '男';
        }else{
        	$investor->sex = '保密';
        }*/
        $investor->sex = $request->input('sex','');

       
        $bool =$investor->save();
        if ($bool && $hidden) {
             return redirect('/')->with('success','投资人添加成功');
        }elseif($bool && $hidden == ''){
        	return redirect('/admin/investor')->with('success','投资人添加成功');
        }else{
        	return redirect('/admin/investor')->with('error','投资人添加失败');

        }
        // dump($investor);
    // dump('添加成功');
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
    	$investor = investor::find($id);
    	// dd($investor->sex);
    	return view('Admin/investor/edit',['investor'=>$investor]);
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
        dump($request->all());
        dump($id);
        $investor = investor::find($id);
        dump($investor);
        $investor->name = $request->name;
        $investor->sex = $request->sex;
        $investor->phone = $request->phone;
        $investor->email = $request->email;
        $bool = $investor->save();
        if($bool){
        	return redirect('/admin/investor')->with('success','投资人添加成功');
        }else{
        	return redirect('/admin/investor')->with('error','投资人添加失败');
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
        //
    }
}
