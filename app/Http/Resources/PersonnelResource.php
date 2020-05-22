<?php

namespace App\Http\Resources;

use App\User;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonnelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::find($this->user_id);

        return [

            'email' => $user->email,

            'name' => $user->name,

            'Phone' => $user->phone,

            'Device_Ip' => $this->request_ip,

            'last_login' => $user->last_login

        ];
    }
}
