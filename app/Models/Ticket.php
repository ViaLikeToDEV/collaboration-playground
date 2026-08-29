<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    protected $primaryKey = 'ticket_id';
    protected $fillable = ['booking_id', 'concert_id', 'seat_id', 'qr_code', 'is_used'];
    protected function casts(): array { return ['is_used' => 'boolean']; }

    public function booking(): BelongsTo { return $this->belongsTo(Booking::class, 'booking_id', 'booking_id'); }
    public function concert(): BelongsTo { return $this->belongsTo(Concert::class, 'concert_id', 'concert_id'); }
    public function seat(): BelongsTo { return $this->belongsTo(Seat::class, 'seat_id', 'seat_id'); }
    public function validationLogs(): HasMany { return $this->hasMany(TicketValidationLog::class, 'ticket_id', 'ticket_id'); }
}
