<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Expense;


class ExpenseController extends Controller
{
    public function elec() {
        $rooms = Room::get();
        return view('expense.elec', [
            'rooms' => $rooms
        ]);
    }

    public function water() {
        $rooms = Room::get();
        return view('expense.water', [
            'rooms' => $rooms
        ]);
    }

    public function elec_store(Request $request) {
        dd($request->all());
        // $request->validate([

        // ]);
    }

    public function water_store() {

    }
}
