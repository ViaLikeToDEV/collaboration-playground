<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'admin_id';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = ['admin_id'];

    public function user(): BelongsTo { return $this->belongsTo(User::class, 'admin_id', 'user_id'); }
    public function reviewedAnomalies(): HasMany { return $this->hasMany(SystemAnomaly::class, 'reviewed_by_admin_id', 'admin_id'); }
}
