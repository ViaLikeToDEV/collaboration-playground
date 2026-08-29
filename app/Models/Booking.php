<?php

namespace App\Models;

use App\Enums\BookingStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';
    protected $fillable = ['customer_id', 'concert_id', 'booking_date', 'total_amount', 'status', 'expiry_time'];
    protected function casts(): array { return ['booking_date' => 'datetime', 'expiry_time' => 'datetime', 'status' => BookingStatus::class]; }

    public function customer(): BelongsTo { return $this->belongsTo(Customer::class, 'customer_id', 'customer_id'); }
    public function concert(): BelongsTo { return $this->belongsTo(Concert::class, 'concert_id', 'concert_id'); }
    public function seats(): BelongsToMany { return $this->belongsToMany(Seat::class, 'booking_seat', 'booking_id', 'seat_id'); }
    public function payment(): HasOne { return $this->hasOne(Payment::class, 'booking_id', 'booking_id'); }
    public function tickets(): HasMany { return $this->hasMany(Ticket::class, 'booking_id', 'booking_id'); }
    public function seatLockLogs(): HasMany { return $this->hasMany(SeatLockLog::class, 'booking_id', 'booking_id'); }
    public function anomalies(): HasMany { return $this->hasMany(SystemAnomaly::class, 'booking_id', 'booking_id'); }
}
