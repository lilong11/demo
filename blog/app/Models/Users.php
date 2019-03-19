<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	public $table = 'users';

    //模型操作主键名称
    public $primarykey = 'id';
   
    public function userinfo()
    {
   		 return $this->hasOne('App\Models\Usersinfos', 'uid');
    }

}
