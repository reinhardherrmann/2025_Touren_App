<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Trip extends Model
{
    /** @use HasFactory<\Database\Factories\TripFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id','start_stock_id','target_stock_id','truck_id','trip_number','date','plan_date',
        'duration','depot_vt','depot_nt','start','end','plan_distance','distance_driven','start_km',
        'end_km','status', 'trip_type_id', 'remark'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function disruptions(): HasMany
    {
        return $this->hasMany(Disruption::class);
    }

    public function stopps():HasMany
    {
        return $this->hasMany(Stopp::class);
    }

    public function tripType(): HasOne
    {
        return $this->hasOne(TripType::class);
    }
}
