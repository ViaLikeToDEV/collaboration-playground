<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLog extends Model
{
    protected $table = 'audit_log';
    protected $primaryKey = 'log_id';
    protected $fillable = ['user_id', 'action', 'timestamp', 'ip_address', 'target_type', 'target_id'];
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected function casts(): array { return ['timestamp' => 'datetime']; }

    public function user(): BelongsTo { return $this->belongsTo(User::class, 'user_id', 'user_id'); }
}
