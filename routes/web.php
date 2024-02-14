<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/users',[Users::class,'nez']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function (){
    return view('users');
});

Route::get('/order', function () {
    $pizzas=[
        ['type' =>'tosa', 'base'=>'problemas'],
        ['type'=>'peper','base'=>'garlic'],
        ['type'=>'tosa', 'base'=>'trepo'],
    ];

    return view('order',[
        'pizzas'=>$pizzas,
        'name'=>request('name'),
        'age'=>request('age')

    ]);
});
