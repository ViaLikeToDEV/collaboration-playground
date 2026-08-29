<?php

namespace App\Models;

use App\Enums\SeatLockStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeatLockLog extends Model
{
    protected $table = 'seat_lock_log';
    protected $primaryKey = 'lock_id';
    protected $fillable = ['booking_id', 'seat_id', 'locked_at', 'expired_at', 'released_at', 'status'];
    protected function casts(): array
    {
        return [
            'locked_at' => 'datetime',
            'expired_at' => 'datetime',
            'released_at' => 'datetime',
            'status' => SeatLockStatus::class,
        ];
    }

    public function booking(): BelongsTo { return $this->belongsTo(Booking::class, 'booking_id', 'booking_id'); }
    public function seat(): BelongsTo { return $this->belongsTo(Seat::class, 'seat_id', 'seat_id'); }
}
