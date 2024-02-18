<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        return view('adminpanel.kelas.view_kelas');
    }
}
