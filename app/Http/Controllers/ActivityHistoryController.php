<?php

namespace App\Http\Controllers;

use App\ActivityHistory;
use App\Activity;
use App\Http\Resources\ActivityHistoryResource;
use App\Http\Resources\PersonnelResource;

use Illuminate\Http\Request;

class ActivityHistoryController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function customDurationHistory(Activity $activity, Request $request)
    {

       /*  $customHistory = ActivityHistory::where('activity_id', $activity->id)->whereDateBetween('created_at', [$request->dateFrom, $request->dateTo])->get();
 */
        $customHistory = ActivityHistory::where('activity_id', $activity->id)->whereDate('created_at', '>=', $request->dateFrom)->whereDate('created_at', '<=', $request->dateTo)->get();

        return ActivityHistoryResource::collection($customHistory);
  
    }


    public function getActivityHistory(Activity $activity)
    {
        return ActivityHistoryResource::collection($activity->history);
    }



    public function getHistoryUser(ActivityHistory $history)
    {
        return new PersonnelResource($history);
    }

}
