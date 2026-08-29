<?php

namespace App\Models;

use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use App\Enums\RiskLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    protected $primaryKey = 'payment_id';
    protected $fillable = ['booking_id', 'amount', 'method', 'status', 'payment_date', 'provider_transaction_id', 'decline_code', 'risk_level', 'card_fingerprint'];
    protected function casts(): array
    {
        return [
            'method' => PaymentMethod::class,
            'status' => PaymentStatus::class,
            'risk_level' => RiskLevel::class,
            'payment_date' => 'datetime',
        ];
    }

    public function booking(): BelongsTo { return $this->belongsTo(Booking::class, 'booking_id', 'booking_id'); }
    public function chargebacks(): HasMany { return $this->hasMany(Chargeback::class, 'payment_id', 'payment_id'); }
}
