<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class DashboardStatsController extends Controller
{
    
    public function activityStats()
    {

        $activity = Activity::all();

        return response()->json([

            'pending' => $activity->where('status', 'pending')->count(),

            'done' => $activity->where('status', 'done')->count(),

            'complete_percent' => $activity->where('status', 'done')->count() / $activity->count()
        ]);
    }
}
