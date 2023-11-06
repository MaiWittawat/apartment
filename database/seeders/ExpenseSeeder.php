<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Expense;


class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::get();
        foreach($rooms as $room) {
            $expense = new Expense();
            $expense->elec_unit = 0;
            $expense->water_unit = 0;
            $expense->rental_period = date('Y-m-29', strtotime('-1 month'));
            $expense->room()->associate($room);
            $expense->save();
        }
    }
}
