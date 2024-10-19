<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time_Slot extends Model
{
    use HasFactory;
    protected $table = 'time_slots';

    protected $fillable = [
        'slot'
    ];
}
