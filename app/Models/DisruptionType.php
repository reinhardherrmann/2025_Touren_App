<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DisruptionType extends Model
{
    /** @use HasFactory<\Database\Factories\DisruptionTypeFactory> */
    use HasFactory;

    protected $fillable = [ 'id','disruption_id','name','description'];

    public function disruption(): BelongsTo
    {
        return $this->belongsTo(Disruption::class);
    }
}
