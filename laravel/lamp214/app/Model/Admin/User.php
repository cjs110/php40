<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'id';
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 获得与用户关联的表。
     */
    public function uinfo(){
        return $this->hasOne('App\Model\Admin\User_info','uid','id');
    }
}
