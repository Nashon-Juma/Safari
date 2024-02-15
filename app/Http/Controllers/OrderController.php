<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        // $pizzas=order::all();
        // $pizzas=order::orderBy('name','desc')->get();
        // $pizzas=order::where('type','gino')->get();
        $pizzas=order::latest()->get();
        return view('order',[
            'pizzas'=>$pizzas
        ]);
    }
    public function show($id){
        return view('detail',['id'=>$id]);
    }
}
