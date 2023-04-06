<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\TransactionController;
use App\Http\Controllers\LandpageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function(){

     Route::get('fundAcc', [FrontendController::class, 'fundAcc']);

    Route::post('addfund', [FrontendController::class, 'insert']);

    Route::get('withdraw', [FrontendController::class, 'withdraw']);

    Route::get('profitrec', [FrontendController::class, 'profitrec']);

    Route::get('transaction', [TransactionController::class, 'transaction']);

    Route::get('crypto', [TransactionController::class, 'crypto']);

    Route::get('transfer', [TransactionController::class, 'transfer']);

   Route::post('send', [TransactionController::class, 'send']);

  
});

    Route::get('contact', [LandpageController::class, 'contact']);
    Route::get('faq', [LandpageController::class, 'faq']);
    Route::get('terms', [LandpageController::class, 'terms']);
    Route::get('policy', [LandpageController::class, 'policy']);

// Route::middleware(['auth'])->group(function(){

//     route::get('withdraw', function(){

//         return view('frontend.withdraw');
//     })->middleware('password.confirm');

//     });

// Route::group(['middleware' => ['auth', 'isAdmin']], function (){
//     Route::get('/dashboard', function () {
//         return view('Admin.dashboard');
//     });
// });

Route::middleware(['auth', 'isAdmin'])->group(function () {
   Route::get('/dashboard', function () {
        return view('Admin.dashboard');
    });  

     Route::get('funds', [AdminController::class, 'funds']);
     Route::get('users', [AdminController::class, 'users']);
     Route::get('members', [AdminController::class, 'members']);
     Route::get('monthly', [AdminController::class, 'monthly']);
     Route::get('yearly', [AdminController::class, 'yearly']);
     Route::get('subscribe', [AdminController::class, 'subscribe']);
     Route::get('charges', [AdminController::class, 'charges']);
     Route::get('tables', [AdminController::class, 'tables']);
     Route::get('charts', [AdminController::class, 'charts']);
     Route::get('icons', [AdminController::class, 'icons']);
      Route::get('adduser', [AdminController::class, 'adduser']);
       Route::get('edituser', [AdminController::class, 'edituser']);
        Route::get('logedin', [AdminController::class, 'logedin']);


         Route::post('add_fund', [AdminController::class, 'add_fund']);
          Route::post('post', [AdminController::class, 'post']);
});