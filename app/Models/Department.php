<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Department extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'certificate_id' => 'integer',
    ];

    /**
     * Get the certificate associated with the department.
     */
    public function certificate(): HasOne
    {
        return $this->hasOne(Certificate::class);
    }

    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }
}
