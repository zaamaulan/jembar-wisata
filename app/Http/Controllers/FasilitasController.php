<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index(){

        // $fasilitas = Fasilitas::all();

        return view('guest.fasilitas.index');

    }
}
