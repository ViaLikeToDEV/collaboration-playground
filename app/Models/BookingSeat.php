<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BookingSeat extends Pivot
{
    protected $table = 'booking_seat';
    public $incrementing = false;
    protected $fillable = ['booking_id', 'seat_id'];
}
