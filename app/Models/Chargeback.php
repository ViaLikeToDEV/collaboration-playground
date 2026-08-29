<?php

namespace App\Models;

use App\Enums\ChargebackStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chargeback extends Model
{
    protected $primaryKey = 'chargeback_id';
    protected $fillable = ['payment_id', 'provider_chargeback_id', 'reason', 'amount', 'status', 'created_at', 'resolved_at'];
    public const UPDATED_AT = null;
    protected function casts(): array { return ['status' => ChargebackStatus::class, 'created_at' => 'datetime', 'resolved_at' => 'datetime']; }

    public function payment(): BelongsTo { return $this->belongsTo(Payment::class, 'payment_id', 'payment_id'); }
}
