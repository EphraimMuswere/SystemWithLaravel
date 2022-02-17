<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            
        return view('welcome');
        }
        public function notices (){
            return view('notices');
        }
    
        public function payment (){
            return view('payment');
        }
        public function pettcash (){
            return view('pettcash');
        }

        public function transport (){
            return view('transport');
        }
        public function fuel (){
            return view('fuel');
        }
}
