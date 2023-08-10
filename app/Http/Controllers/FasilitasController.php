<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index(){

        $fasilitas = Fasilitas::all();
        return view('guest.fasilitas.index', compact('fasilitas'));
    }
    public function show($id)
    {
        $fasilitas = Fasilitas::where('id', $id)->firstOrFail();
        return view('guest.fasilitas.show', compact('fasilitas'));
    }
}
