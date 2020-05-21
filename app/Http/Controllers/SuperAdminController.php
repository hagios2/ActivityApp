<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\NewMemberRequest;
use App\Jobs\NewPersonnelsJob;
use App\User;

class SuperAdminController extends Controller
{
    
    public function __construct()
    {
        //check if auth user has super admin role

 /*        $this->middleware('isSuperAdmin'); */
    }


    public function showForm()
    {
        return view('create_personnel');
    }


    public function addNewMember(NewMemberRequest $request)
    {

        $password = Hash::make(str_random(8));

        $newUser = User::create([

            'password' => $password,

            'isActive' => true,

            'name' => $request->name,

            'email' => $request->email,

            'role' => $request->role,

            'phone' => $request->phone

        ]);

        NewPersonnelsJob::dispatch($newUser, $password);

        return back()->withSuccess('Added new Personnel successfully');
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
