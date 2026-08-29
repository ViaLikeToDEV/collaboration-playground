<?php

namespace App\Models;

use App\Enums\AnomalyStatus;
use App\Enums\AnomalyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SystemAnomaly extends Model
{
    protected $table = 'system_anomaly';
    protected $primaryKey = 'anomaly_id';
    protected $fillable = ['booking_id', 'reviewed_by_admin_id', 'type', 'message', 'timestamp', 'status', 'resolve_reason'];
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected function casts(): array { return ['type' => AnomalyType::class, 'status' => AnomalyStatus::class, 'timestamp' => 'datetime']; }

    public function booking(): BelongsTo { return $this->belongsTo(Booking::class, 'booking_id', 'booking_id'); }
    public function reviewedByAdmin(): BelongsTo { return $this->belongsTo(Admin::class, 'reviewed_by_admin_id', 'admin_id'); }
    public function attachments(): HasMany { return $this->hasMany(AnomalyAttachment::class, 'anomaly_id', 'anomaly_id'); }
}
