<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Expense;
use App\Models\Contract;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;
    public function expenses(): HasMany {
        return $this->hasMany(Expense::class);
    }

    public function contracts(): HasMany {
        return $this->hasMany(Contract::class);
    }

    public function complaint(): HasOne {
        return $this->hasOne(Complaint::class);
    }
}
