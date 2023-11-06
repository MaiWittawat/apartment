<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Room;
use App\Models\Bill;

class Expense extends Model
{

    protected $casts = [
        'rental_period' => 'date',
    ];    

    use HasFactory;
    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function bill() {
        return $this->belongsTo(Bill::class);
    }

    public function getLastMonth() {
        $room = $this->room->id;
        $firstDayOfLastMonth = $this->rental_period->subMonthNoOverflow()->startOfMonth();
        $lastDayOfLastMonth = $this->rental_period->subMonthNoOverflow()->endOfMonth();

        $expensesLastMonth = Expense::whereBetween('rental_period', [$firstDayOfLastMonth, $lastDayOfLastMonth])->where('room_id', $room)->first();
        return $expensesLastMonth;
    }
}
