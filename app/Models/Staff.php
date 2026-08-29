<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = ['staff_id', 'company_id'];

    public function user(): BelongsTo { return $this->belongsTo(User::class, 'staff_id', 'user_id'); }
    public function company(): BelongsTo { return $this->belongsTo(Company::class, 'company_id', 'company_id'); }
    public function concerts(): BelongsToMany { return $this->belongsToMany(Concert::class, 'staff_concert', 'staff_id', 'concert_id'); }
    public function ticketValidationLogs(): HasMany { return $this->hasMany(TicketValidationLog::class, 'staff_id', 'staff_id'); }
}
