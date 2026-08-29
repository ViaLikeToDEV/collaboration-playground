<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Concert extends Model
{
    protected $primaryKey = 'concert_id';
    protected $fillable = ['company_id', 'organizer_id', 'name', 'artist', 'date_time', 'venue'];
    protected function casts(): array { return ['date_time' => 'datetime']; }

    public function company(): BelongsTo { return $this->belongsTo(Company::class, 'company_id', 'company_id'); }
    public function organizer(): BelongsTo { return $this->belongsTo(EventOrganizer::class, 'organizer_id', 'organizer_id'); }
    public function zones(): HasMany { return $this->hasMany(Zone::class, 'concert_id', 'concert_id'); }
    public function bookings(): HasMany { return $this->hasMany(Booking::class, 'concert_id', 'concert_id'); }
    public function tickets(): HasMany { return $this->hasMany(Ticket::class, 'concert_id', 'concert_id'); }
    public function staff(): BelongsToMany { return $this->belongsToMany(Staff::class, 'staff_concert', 'concert_id', 'staff_id'); }
}
