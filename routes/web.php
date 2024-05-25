<?php

use App\Models\Menu;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Guest Routes + Login Routes

Route::get('/',[UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate',[UserController::class, 'authenticate'])->middleware('guest');

Route::get('/register',[UserController::class, 'register'])->middleware('auth');

Route::post('/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/users',[UserController::class, 'userpage'])->middleware('auth');
   
// Route::get('/customerMenu',[UserController::class, 'customerMenu'])->middleware('guest');

// Admin Routes

Route::get('/sadmin/users', [AdminController::class,'showUsers'])->middleware('auth');

Route::get('/sadmin/dashboard', [AdminController::class,'adminDashboard'])->middleware('auth');


// User Routes

Route::get('/users/account',[UserController::class,'account'])->name('account')->middleware('auth');

// User Dashboard Interface_1
Route::get('/users/dashboard',[UserController::class,'userDashboard'])->name('userDashboard')->middleware('auth');
// User Live Orders Interface_2
Route::get('/users/liveorders',[UserController::class,'liveorders'])->name('liveorders')->middleware('auth');
// User Orders Interface_3
Route::get('/users/orders',[UserController::class,'orders'])->name('orders')->middleware('auth');

Route::get('/users/liveorders/details',[UserController::class,'details'])->name('details')->middleware('auth');

// User Restaurant Interface_4
    //index
    Route::get('/users/restaurant',[UserController::class,'restaurant'])->name('restaurant')->middleware('auth');

    // working hours
    Route::get('/users/workinghours',[UserController::class,'workinghours'])->name('workinghours')->middleware('auth');

    // custom css
    Route::get('/users/customcss',[UserController::class,'customcss'])->name('customcss')->middleware('auth');
    

// User Menu Interface_5
Route::get('/users/menu',[UserController::class,'menu'])->name('menu')->middleware('auth');

// User Tables Interface_6
    // index 
    Route::get('/users/tables',[UserController::class,'tables'])->name('tables')->middleware('auth');
    
    // restaurant areas
    Route::get('/users/tables/addArea',[UserController::class,'addArea'])->name('addArea')->middleware('auth');

    // restaurant add area 
    Route::get('/users/tables/areas',[UserController::class,'restAreas'])->name('restAreas')->middleware('auth');

    // restaurant edit area 
    Route::get('/users/tables/editArea',[UserController::class,'editArea'])->name('editArea')->middleware('auth');

    // restaurant  tables
    // Route::get('/users/tables/areas',[UserController::class,'restAreas'])->name('restAreas')->middleware('auth');

    // restaurant floorPlan 
    Route::get('/users/tables/floorPlan',[UserController::class,'floorPlan'])->name('floorPlan')->middleware('auth');

    // restaurant add tables
    

    // User Qr Builder Interface_7
    Route::get('/users/qrBuilder',[UserController::class,'qrBuilder'])->name('qrBuilder')->middleware('auth');

// User Delivery Areas Interface_8
    // index
    Route::get('/users/deliveryAreas',[UserController::class,'deliveryAreas'])->name('deliveryAreas')->middleware('auth');

    // add new delivery Area
    Route::get('/users/delivery/addDelArea',[UserController::class,'addDelArea'])->name('addDelArea')->middleware('auth');
    
    

    // User plans Interface_9 
    Route::get('/users/plans',[UserController::class,'plans'])->name('plans')->middleware('auth');

    // User finaces Interface_10 
    Route::get('/users/finances',[UserController::class,'finances'])->name('finances')->middleware('auth');

    // User Share Interface_11 
    Route::get('/users/share',[UserController::class,'share'])->name('share')->middleware('auth');
    











// lacks sidebar
Route::get('users/razi',function(){
    return view('sadmin.dashboard');
});



Route::get('floor',function(){
    return view('users.tables.floorPlan');
});



Route::get('amro',function(){
    return view('menus.addItem');
});

// Route::get('login1',function(){
//     return view('login');
// });

Route::get('customerMenu',function(){
    return view('guest.customerMenu');
});




