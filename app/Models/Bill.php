<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expense;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        $current = $this->expense()->first();

        return $current;
    }

}
