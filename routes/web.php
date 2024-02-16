<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('index');
});
Route::get('/index', function () {return view('index');
});

Route::get('/login', function () {return view('login');
});

Route::get('/users',[Users::class,'nez']);

Route::get('/contact', function () {return view('contact');
});


Route::get('/order', [OrderController::class,'index'
]);

Route::get('order/create',[OrderController::class,'create'
]);

Route::get('/order/{id}',[OrderController::class,'show'
]);




