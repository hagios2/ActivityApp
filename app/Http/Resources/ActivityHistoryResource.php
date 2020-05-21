<?php

namespace App\Http\Resources;

use App\ActivityHistory;
use \Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $history = ActivityHistory::find($this->id);

        return [

            'id' => $this->id,

            'username' => $history->user->name,

            'request_ip' => $this->request_ip,

            'activity_type' => $this->activity_type,

            'date' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('Y-m-d'),

            'time' =>  Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('H-i-s'),

            'userid' => $history->user->id,

            'activity_remarks' => $this->activity_remarks

        ];
    }
}
