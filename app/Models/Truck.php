<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    /** @use HasFactory<\Database\Factories\TruckFactory> */
    use HasFactory;

    protected $fillable = [
        'manufacturer_id','trailer_id','truck_number','type','licence_plate','capacity','is_active','remark', 'image'
    ];
}
