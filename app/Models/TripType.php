<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TripType extends Model
{
    /** @use HasFactory<\Database\Factories\TripTypeFactory> */
    use HasFactory;
    protected $fillable = ['name','description','remark'];

    public function trip():BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
}
