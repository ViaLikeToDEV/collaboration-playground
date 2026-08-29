<?php

namespace App\Models;

use App\Enums\SeatStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Seat extends Model
{
    protected $primaryKey = 'seat_id';
    protected $fillable = ['zone_id', 'row', 'number', 'status'];
    protected function casts(): array { return ['status' => SeatStatus::class]; }

    public function zone(): BelongsTo { return $this->belongsTo(Zone::class, 'zone_id', 'zone_id'); }
    public function bookings(): BelongsToMany { return $this->belongsToMany(Booking::class, 'booking_seat', 'seat_id', 'booking_id'); }
    public function ticket(): HasOne { return $this->hasOne(Ticket::class, 'seat_id', 'seat_id'); }
    public function seatLockLogs(): HasMany { return $this->hasMany(SeatLockLog::class, 'seat_id', 'seat_id'); }
}
