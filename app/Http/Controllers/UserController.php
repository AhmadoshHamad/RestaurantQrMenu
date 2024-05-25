<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        if (auth()->check()){
            if(auth()->user()->isAdmin){
                return redirect('/sadmin/dashboard');
            }
            return redirect('/users');
        }
        return view('index');
    }
    // public function all(){
    //     $users = User::all();
    //     return view('all',['users' => $users]);
    // }

    public function authenticate(Request $request){
        if (auth()->check()){
            if(auth()->user()->isAdmin){
                return redirect('/sadmin/dashboard');
            }
            return redirect('/users');
        }
        $data = $request->validate([
            'password' => 'required',
            'email' => ['required', 'email'],
        ]);
        if(auth()->attempt($data)){
            $request->session()->regenerate();
            if(auth()->user()->isAdmin){
                return redirect('/sadmin/dashboard');
            }
            else{
            return redirect('/users')->with('message','You are now logged in');
            }
        }
        return back()->withErrors(['email' => 'Invalid email or password'])->onlyInput('email');
    }
    
    public function userpage(User $user){
        if (auth()->check()){
            if(auth()->user()->isAdmin){
                return redirect('/sadmin/dashboard');
            }
        }
        if (!Auth::check()) {
            return redirect('/'); 
        }
        $menus = Menu::where('user_id', auth()->user()->id)->get();
        return view('users.dashboard',[
            'user'=>$user,
            'menus'=>$menus
        ]);
    }
    
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        auth()->logout();

        return redirect('/');
    }

    public function register(){
        if(auth()->user()->isAdmin){
            return view('users.register');
        }
        return redirect('/users');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required','min:3'],
            'password' => 'required|min:6',
            'email' => ['required', 'email',Rule::unique('users','email')],
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        auth()->login($user);
        return redirect('/users')->with('message','User created and logged in');
    }

    // function uploadPdf(Request $request){
    //     $request->validate([
    //         'pdf' => 'required|mimes:pdf',
    //     ]);
    //     // dd($ahmad);
    //      return $request->file('pdf')->store('pdfs');
    //      dd($request);
    // }


    function account(){
        return view('users.account');
    }

    function userDashboard(){
        return view('users.dashboard');
    }
    
    function liveorders(){
        return view('users.liveorders');
    }

    function details(){
        return view('users.details');
    }

    function orders(){
        return view('users.orders');
    }


    // restaurant Views

    function  restaurant(){
        return view('users.restaurant');
    }

    function  workinghours(){
        return view('users.restaurant_workinghours');
    }

    function customcss(){
        return view('users.customCss');
    }

    function menu(){
        return view('users.menu');
    }

    // Tables views

    function tables (){
        return view('users.tables.index');
    }

    function restAreas(){
        return view('users.tables.restAreas');
    }

    function addArea(){
        return view('users.tables.addArea');
    }

    function editArea(){
        return view('users.tables.editArea');
    }

    function addTable(){
        return view('users.tables.addNewTable');
    }

    function floorPlan(){
        return view('users.tables.floorPlan');
    }


    function qrBuilder(){
        return view('users.qrBuilder');
    }

    // Delivery areas views
    function deliveryAreas(){
        return view('users.delivery.index');
    }
    // add new delivery area 
    function addDelArea(){
        return view('users.delivery.addDelArea');
    }


    function plans(){
        return view('users.plans');
    }


    function finances(){
        return view('users.finances');
    }


    function share(){
        return view('users.share');
    }
    

    function customerMenu(){
        return view('guest.customerMenu');
    }

}

