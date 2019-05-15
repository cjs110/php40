<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    //
    protected $table = 'user_info';
    protected $primaryKey = 'id';
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    public function user(){
        return $this->hasOne('App\Model\Admin\User','id','uid');
    }
}
