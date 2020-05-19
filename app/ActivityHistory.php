<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityHistory extends Model
{
    protected $fillable = [

        'user_id', 'activity_id', 'request_ip', 'activity_type', 'activity_remarks'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }

}
