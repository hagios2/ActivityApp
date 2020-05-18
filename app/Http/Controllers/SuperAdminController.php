<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NewMemberRequest;

use App\Activity; 

class SuperAdminController extends Controller
{
    
    public function __construct()
    {
        //check if auth user has super admin role

        $this->middleware('isSuperAdmin');
    }


    public function addNewMember(NewMemberRequest $request)
    {
        auth()->user()->addMember($request->all());
    }


    public function blockMember(User $user)
    {

        $user->update(['isActive' => false]);



        return response()->json(['status' => $user->name.' blocked']);
    }



    public function unBlockMember(User $user)
    {

        $user->update(['isActive' => true]);

        return response()->json(['status' => $user->name.' unblocked']);
    }
}
