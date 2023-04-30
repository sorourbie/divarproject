<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\validator;
use App\Http\Controllers\HomeController;

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
    return view('pages.home');
});

Route::get('/db', function () {
    return DB::table('users')->get();
});

Route::get('/ulist', function () {

    $records=DB::table('users')->orderby('UserID','desc')->get();
    return view('pages.userlist',["users"=>$records]);
});


Route::get('/', function () {
    return view('index');
});


Route::prefix('admin')->group(function () {

    Route::get('/users/login', function () {

        return view('admin.users.login');

    });


    Route::get('/users/register', function () {


        return view('pages.register');

    });

    Route::post('/users/register', [HomeController::class, 'register']);


    Route::delete('/users/delete/{UserID}',function($UserID){
        $user=Users::find($UserID);
        $user->delete();
        $session::flash('message','رکورد حذف شد ');
        return redirect('/ulist');

});

Route::put('/users/edit/{UserID}',function($UserID){
    $user=Users::find($UserID);
    return view('pages.edit')->with('user',$user);

});
    });






