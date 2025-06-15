<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Disruption extends Model
{
    /** @use HasFactory<\Database\Factories\DisruptionFactory> */
    use HasFactory;
    protected $fillable = [
        'disruption_type_id','name','description','duration'
    ];

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }

    public function disruptionType(): HasOne
    {
        return $this->hasOne(DisruptionType::class);
    }
}
