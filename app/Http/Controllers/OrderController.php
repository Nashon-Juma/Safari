<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
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
    }
    public function items($id){
        return view('detail',['id'=>$id]);
    }
}
