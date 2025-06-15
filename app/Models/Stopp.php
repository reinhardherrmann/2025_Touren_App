<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stopp extends Model
{
    /** @use HasFactory<\Database\Factories\StoppFactory> */
    use HasFactory;

    protected $fillable = ['trip_id', 'store_id', 'arrival_time', 'departure_time', 'order_number'];

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
}
