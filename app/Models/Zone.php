<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    protected $primaryKey = 'zone_id';
    protected $fillable = ['concert_id', 'name', 'price', 'capacity'];

    public function concert(): BelongsTo { return $this->belongsTo(Concert::class, 'concert_id', 'concert_id'); }
    public function seats(): HasMany { return $this->hasMany(Seat::class, 'zone_id', 'zone_id'); }
}
