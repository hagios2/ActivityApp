<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function remarks()
    {
        return $this->hasManyThrough('App\Remark', 'App\ActivityHistory');
    }

    public function history()
    {
        return $this->belongsTo('App\ActivityHistory');
    }
}
