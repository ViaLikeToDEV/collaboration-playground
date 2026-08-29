<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventOrganizer extends Model
{
    protected $table = 'event_organizers';
    protected $primaryKey = 'organizer_id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = ['organizer_id', 'company_id'];

    public function user(): BelongsTo { return $this->belongsTo(User::class, 'organizer_id', 'user_id'); }
    public function company(): BelongsTo { return $this->belongsTo(Company::class, 'company_id', 'company_id'); }
    public function concerts(): HasMany { return $this->hasMany(Concert::class, 'organizer_id', 'organizer_id'); }
}
