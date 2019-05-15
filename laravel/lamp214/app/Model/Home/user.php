<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'id';
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
