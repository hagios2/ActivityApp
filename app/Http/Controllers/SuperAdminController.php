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


    public function blockMember(User $personnel)
    {

        $personnel->update(['isActive' => false]);

        return back()->with('success', $personnel->name.' blocked');
    }



    public function unBlockMember(User $personnel)
    {

        $personnel->update(['isActive' => true]);


        return back()->with('success', $personnel->name.' unblocked');

    }


    public function viewPersonnels()
    {
        $personnels = User::where('role', '!=', 'super_admin')->paginate(5);

        return view('view_personnels', compact('personnels'));
    }
}
