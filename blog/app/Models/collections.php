<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class collections extends Model
{
	public $table = 'collections';

    //商品一对多
    public function goods()
    {
   		 return $this->hasMany('App\Models\Goods', 'gid');
    }
}
