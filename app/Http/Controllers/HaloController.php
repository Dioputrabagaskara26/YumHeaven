<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    function mangga(){
        $nama = "Ariqo";
        return view('ariqo', ['nama' => $nama]);
    }
}
