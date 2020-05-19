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



    public function history()
    {

        return $this->hasMany('App\ActivityHistory');

    }



    public function addActivityHistory($activityHistory)
    {

        return $this->history()->create($activityHistory);
        
    }
}
