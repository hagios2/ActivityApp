<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['request_ip', 'user_id', 'activity', 'status'];

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


    public function addActivity($activity)
    {
        return $this->create($activity);
    }
}
