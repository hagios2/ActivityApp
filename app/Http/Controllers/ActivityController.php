<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NewActivityRequest;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /* 
    * This function adds new activity to into db
    *
    * Stores activity remarks if request has remarks
    *
    */
    
    public function storeActivity(NewActivityRequest $request)
    {
        $activity = [

            'request_ip' =>  $_SERVER['REMOTE_ADDR'],

            'activity' => $request->activity,

            'status' => $request->status
        ];

        $newActivity = auth()->user()->addActivity($activity);

        if($request->has('remarks'))
        {
            $newActivity->addRemarks();
        }


        
    }
}
