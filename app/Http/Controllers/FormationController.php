<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        return view('formations.index');
    }

    public function detail(){
        return view ('formations.detail-formation');
    }
}
