<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanTiketController extends Controller
{
    public function index(){
        return view('pesan-tiket');
    }

    public function store(Request $request){
        
    }
}
