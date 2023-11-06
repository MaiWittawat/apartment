<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index() {
        return view('complaints.index');
    }

    public function show() {
        return view('complaints.show');
    }

    public function general() {
        return view('complaints.createGeneral');
    }

    public function maintenance() {
        return view('complaints.createMaintenance');
    }

    public function store() {

    }
}
