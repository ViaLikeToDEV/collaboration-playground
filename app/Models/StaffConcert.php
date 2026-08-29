<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class StaffConcert extends Pivot
{
    protected $table = 'staff_concert';
    public $incrementing = false;
    protected $fillable = ['staff_id', 'concert_id'];
}
