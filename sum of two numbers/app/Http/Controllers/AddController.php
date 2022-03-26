<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
     public function home(){
        return view('sumoftwo');
    }

     public function add(Request $req){
        $sum = $req->number1 + $req->number2;
        
        print_r($sum);
    }
}
