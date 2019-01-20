<?php

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

Route::get('/thankyou',function(){
    return view('thankyou');
});
Route::get('/product',function(){
    return view('product');
});
Route::get('/shop',function(){
    return view('shop');
});
//added by c_sousen purpose testing -> added lin to langding-page.blade.php as a starter page of technoblog.com 
// Route::get('/', function () {
//     return view('landing-page');
// });
// Route::get('/', 'LandingPageController@index')->name('landing-page');
Auth::routes();

//  Route::get('/home', 'HomeController@index')->name('home');
//added by c_sousen
//  $regex ='([A-z\d-\/_.]+)?';
// Route::get('{path}', 'HomeController@index')->where('path',$regex);
