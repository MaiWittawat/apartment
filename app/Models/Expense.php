<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Room;
use App\Models\Bill;

class Expense extends Model
{
    use HasFactory;
    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function bill() {
        return $this->belongsTo(Bill::class);
    }
}
