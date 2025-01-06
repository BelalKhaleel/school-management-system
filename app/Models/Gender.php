<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $guarded = [
        'id', 
        'gender'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
