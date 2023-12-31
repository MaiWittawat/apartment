<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class BillController extends Controller
{
    public function index() {
        return view('bill.index');
    }

    public function show() {
        return view('bill.show');
    }

    public function history() {
        return view('bill.history');
    }
}
