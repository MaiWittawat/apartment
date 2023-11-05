<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index() {
        return view('bill');
    }

    public function show() {
        return view('bill.show');
    }

    public function history() {
        return view('bill.history');
    }

    public function create() {
        return view('bill.create');
    }

    public function store() {
        
    }
}
