<?php

namespace App\Http\Resources;

use \Carbon\Carbon;

use App\Activity;

use Illuminate\Http\Resources\Json\JsonResource;

class DailyActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return parent::toArray($request);

    }
       /*  $activity = Activity::find($this->id);


        return [

            'created_by' => $activity->user,
            
            'activity' => $this->activity,

            'status' => $this->status,

            'activity_history' => $activity->history->groupBy(function($timestamp){

                return $this->changeTimeStampFormat($timestamp->created_at, 'Y-m-d');
            }),

            'created_at_time' => $this->changeTimeStampFormat($activity->created_at, 'H:i:s'),

            'created_at_date' => $this->changeTimeStampFormat($activity->created_at, 'Y:m:d'),

            'updated_at_time' => $this->changeTimeStampFormat($activity->updated_at, 'H:i:s'),

            'updated_at_date' => $this->changeTimeStampFormat($activity->updated_at, 'Y:m:d')

        ];
       
    }

    public function changeTimeStampFormat($timestamp, $format)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->format($format);
    } */
}
