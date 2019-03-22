<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'cart';

   public $timestamps = false;

   //配置模型关系
   public function goods()
   {
   		return $this->hasOne('App/Models/Goods','id');
   }
}
