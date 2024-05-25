<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //

    function showUsers(){
        if(!auth()->user()->isAdmin){
            return redirect('/users');
        }
        $users = User::all();
        return view('sadmin.users',['users' => $users]);
    }
    // public function Impersonate(User $id){
    //     $users =User:: find ($id);
    //     Auth::user()->impersonate($users);
    //     return redirect()->route('users');
    // }

    function adminDashboard(){
        if(!auth()->user()->isAdmin){
            return redirect('/users');
        }
        $numberOfUsers = User::count();
        return view('sadmin.dashboard',['nUsers' => $numberOfUsers]);
    }

   
}



