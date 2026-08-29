<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnomalyAttachment extends Model
{
    protected $table = 'anomaly_attachment';
    protected $primaryKey = 'attachment_id';
    protected $fillable = ['anomaly_id', 'file_path'];

    public function anomaly(): BelongsTo { return $this->belongsTo(SystemAnomaly::class, 'anomaly_id', 'anomaly_id'); }
}
