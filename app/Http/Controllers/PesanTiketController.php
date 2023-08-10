<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanTiketController extends Controller
{
    public function index(){
        return view('guest.tiket.index');
    }

    public function store(Request $request){
        
    }
}
