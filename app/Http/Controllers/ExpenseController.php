<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Expense;
use App\Models\Bill;

class ExpenseController extends Controller
{
    public function create() {
        // $rooms = Room::get();
        $rooms = Room::take(2)->get();
        return view('expense.create', [
            'rooms' => $rooms
        ]);
    }

    public function store(Request $request) {
        $rooms = $request->except(['_token', 'rental_period']);

        $rules = array();
        foreach(array_keys($rooms) as $room) {
            $rules[$room] = ['required', 'integer', 'min:0', 'max:9999'];
        }
        $rules['rental_period'] = ['required', 'date', 'after_or_equal:today'];

        $request->validate($rules);

        $keys = array_keys($rooms);

        for ($i=0; $i < count($rooms); $i+=2) { 
            $elec = $rooms[$keys[$i]];
            $water = $rooms[$keys[$i+1]];
            $room_num = substr($keys[$i], 5);
            $room = Room::where('room_number', $room_num)->first();

            $bill = new Bill();
            $bill->rental_period = $request->get('rental_period');
            $bill->save(); // Save the bill first
            
            $expense = new Expense();
            $expense->elec_unit = $elec;
            $expense->water_unit = $water;
            $expense->rental_period = $request->get('rental_period');
            $expense->room()->associate($room);
            $expense->bill()->associate($bill); // Associate the bill with the expense
            $expense->save(); // Save the expense
            
            $bill->expense()->save($expense); // Associate the expense with the bill (optional, depending on your setup)
            $bill->save();
        }


        return redirect()->route('home');
    }

}
