<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $primaryKey = 'customer_id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = ['customer_id'];

    public function user(): BelongsTo { return $this->belongsTo(User::class, 'customer_id', 'user_id'); }
    public function bookings(): HasMany { return $this->hasMany(Booking::class, 'customer_id', 'customer_id'); }
}
