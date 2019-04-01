<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\collections;
use App\Models\Goods;
use App\Models\Users;

class CollectionController extends Controller
{
    /**
     * 收藏显示.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = session('uid');
        // dd($uid);
        $user = Users::find($uid);
        $collection = $user->collection;
        $i = 1;
         //友情链接
        $links = DB::table('links')->get();

        return view('Home.Collections.index',['title'=>'个人收藏','collection'=>$collection,'i'=>$i,'links'=>$links]);
    }
    public function add($gid)
    {
        //商品收藏添加
        // dd($gid); //商品传过来的id
        $goods = new Goods;
        $good = $goods->find($gid);

        $collection = new collections;
        $collection->gid = $gid;
        $collection->uid = session('uid');
        $collection->gname = $good['gname'];
        $collection->img = $good['pic'];
        $collection->price = $good['price'];
        $collection->num = $good['goodsNum'];
        $bool = $collection->save();

       if($bool){
            session(['gids'=>$gid]);//商品di
            // dd(session('gids'));
            echo '<script>alert("收藏成功.");location="/Collection"</script>';
       }else{
            echo '<script>alert("收藏失败!");location="/"</script>';
       }

 
    }

    public function delete($id)
    {
       $bool = collections::destroy($id);
       if($bool){
            echo '<script>alert("收藏删除成功.");location="/Collection"</script>'; 
        }else{
            echo '<script>alert("收藏删除失败!");location="/Collection"</script>'; 
        }

 
    }
}
