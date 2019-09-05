<?php
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/check', function () {
    if(Auth::check()){
        return Auth::user()->name;
    }
    else{
        echo "Kuy you need to log in";
    }
});

// not working
// Route::get('/check2', function () {
    
//     $username = "sdfdsf";
//     $password = "1234";
//     if(Auth::attemp(['username'=>$username, 'password'=>$password])){

//         return redirect()->indeed();
//     }
// });