<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //意味着所有属性都可更新
    protected $guarded = [];

    //获取链接
    public function path()
    {
        return 'threads/' . $this->id;
    }
}
