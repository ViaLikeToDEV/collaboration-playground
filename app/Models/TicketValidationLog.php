<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketValidationLog extends Model
{
    protected $table = 'ticket_validation_log';
    protected $primaryKey = 'validation_id';
    protected $fillable = ['ticket_id', 'staff_id', 'validation_time', 'result'];
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
    protected function casts(): array { return ['validation_time' => 'datetime']; }

    public function ticket(): BelongsTo { return $this->belongsTo(Ticket::class, 'ticket_id', 'ticket_id'); }
    public function staff(): BelongsTo { return $this->belongsTo(Staff::class, 'staff_id', 'staff_id'); }
}
