<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{

    protected $guarded = ['id'];

    
    public function activity()
    {
        return $this->belongsTo('App\ActivityHistory');
    }


}
