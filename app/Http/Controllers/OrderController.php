<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $pizzas=order::all();
        // $pizzas=order::orderBy('name','desc')->get();
         // $pizzas=order::where('type','gino')->get();
        // $pizzas=order::latest()->get();
        return view('pizza.order',[
            'pizzas'=>$pizzas
        ]);
    }
    public function show($id){
        return view('pizza.show',['id'=>$id]);
    }
    public function create(){
        return view('pizza.create');
    }
}
