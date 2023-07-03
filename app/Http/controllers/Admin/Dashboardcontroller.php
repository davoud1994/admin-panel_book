<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
 use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function registered(){

        $users=ModelsUser::all();
        return view('admin.register')->With('users',$users);
    }

    public function registeredit($id)
    {

        $users=ModelsUser::findOrFail($id);
        return view('admin.register-edit')->With('users',$users);
    }

    public function registerupdate(Request $request,$id){
        $users=ModelsUser::find($id);
        $users->name=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();
        return redirect('/role-register')->with('status','your data is update');
    }

    public function registerdelete($id){
        $users=ModelsUser::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status','your data is Deleted');
    }

    }


