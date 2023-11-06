<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expense;

class Bill extends Model
{

    protected $casts = [
        'rental_period' => 'date',
    ];

    use HasFactory;
    public function expense() {
        return $this->hasOne(Expense::class);
    }

    public function calBill() {
        $detail = array();
        
        $current = $this->expense()->first();
        $past = $this->expense->getLastMonth();
        $room = $this->expense->room()->first();

        $use_water = $current->water_unit - $past->water_unit;
        $use_elec = $current->elec_unit - $past->elec_unit;

        $bill_water = $use_water * 18;
        $bill_elec = $use_elec * 8;

        $total = $bill_elec + $bill_water + $room->price;

        array_push($detail, ['room' => $room->room_number]);
        array_push($detail, ['new_water' => $current->water_unit]);
        array_push($detail, ['new_elec' => $current->elec_unit]);
        array_push($detail, ['old_water' => $past->water_unit]);
        array_push($detail, ['old_elec' => $past->elec_unit]);
        array_push($detail, ['use_water' => $use_water]);
        array_push($detail, ['use_elec' => $use_elec]);
        array_push($detail, ['bill_water' => $bill_water]);
        array_push($detail, ['bill_elec' => $bill_elec]);
        array_push($detail, ['total' => $total]);
        

        return $detail;
    }

}
