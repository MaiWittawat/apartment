<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaintController extends Controller
{
    public function index(){
        return view('compaints.index');
    }
}
