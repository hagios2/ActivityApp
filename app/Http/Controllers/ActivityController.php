<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;
use App\Activity;
use App\Http\Resources\DailyActivityResource;
use App\Http\Resources\ActivityResource;
use App\Http\Requests\NewActivityRequest;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function viewAllDailyActivity(Request $request)
    {
        
        $activity = Activity::orderBy('created_at', 'DESC')->get();

        if($request->has('param'))
        {

            $dailyActivities = $activity->where('status', $request->param)->groupBy(function($timestamp){

                return Carbon::createFromFormat('Y-m-d H:i:s', $timestamp->created_at)->format('Y-m-d');
    
            });

        
        }else{
 
            $dailyActivities = $activity->groupBy(function($timestamp){

                return Carbon::createFromFormat('Y-m-d H:i:s', $timestamp->created_at)->format('Y-m-d');

            });


        }

        /* dailyActivity->his */

        /* dd($dailyActivities); */

      /*  $dailyActivityCollection = \collect(); */
        
        foreach($dailyActivities as $dailyItems)
        {

            foreach($dailyItems as $dailyActivity)
            {

                //attach the activity hhistory to each activity

               foreach($dailyActivity->history->reverse() as $history)
               {
                   $history->user;
               }
                

                $dailyActivity->user;

           /*      $dailyActivity->history->user; */

               // $dailyActivityCollection->add($dailyActivity);

            }
         
        }

        return DailyActivityResource::collection($dailyActivities); 

      
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

            'status' => 'pending'
        ];

        $newActivity = auth()->user()->addActivity($activity);


        $activityhistory = $newActivity->addActivityHistory([

            'activity_type' => 'created '. $request->activity,

            'request_ip' => $_SERVER['REMOTE_ADDR'],

            'user_id' => auth()->user()->id,

            'activity_remarks' => $request->remarks ?? null
        ]);

        return back()->withSuccess('Added Activity successfully');
        
    }




    public function updateActivityStatus(Activity $activity, Request $request)
    {
        $activity->update([ 'status' => $request->status ]);

        $activity->addActivityHistory([

            'activity_type' => 'Updated '. $activity->activity,

            'request_ip' => $_SERVER['REMOTE_ADDR'],

            'user_id' => auth()->user()->id,

            'activity_remarks' => 'Updated activity status to '. $request->status
        ]);

        return back()->with('success', 'Activity status updated successfuly');
        
    }


 /*    public function modifyActivityDetails(Activity $activity, Request $request)
    {
        $activity->update([ 
            
            'activity' => $request->actvity, 

            'remarks' => $request->remarks
        
        ]);

        $activity->addActivityHistory([

            'activity_type' => 'Modified '. $activity->activity,

            'request_ip' => $_SERVER['REMOTE_ADDR'],

            'user_id' => auth()->user()->id,

            'activity_remarks' => $request->remarks ?? null
        ]);
        
    } */



    public function createActivity()
    {
        return view('add_activity');
    }


   public function viewActivityLog()
   {
       return view('activity_logs');
   }


   public function viewActivityHistory(Activity $activity)
   {

        return view('activity_history', compact('activity'));

        
   }


}
