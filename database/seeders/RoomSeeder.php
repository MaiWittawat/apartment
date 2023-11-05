<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<4; $i++) {
            for($j=1; $j<16; $j++) {
                $room = new Room();
                if($j < 10) {
                    $room->room_number = $i . '0' . $j;
                } else {
                    $room->room_number = $i . $j;
                }
                $room->price = 2600;
                $room->save();
            }
        }
    }
}
