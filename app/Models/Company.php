<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $primaryKey = 'company_id';

    protected $fillable = ['name', 'initials', 'description'];

    public function organizers(): HasMany { return $this->hasMany(EventOrganizer::class, 'company_id', 'company_id'); }
    public function staff(): HasMany { return $this->hasMany(Staff::class, 'company_id', 'company_id'); }
    public function concerts(): HasMany { return $this->hasMany(Concert::class, 'company_id', 'company_id'); }
}
