<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /** @use HasFactory<\Database\Factories\StoreFactory> */
    use HasFactory;
    protected $fillable = ['brand_id','address_id','nav_id','cost_center_number',
        'name','phone_number','is_active','has_ramp','remark', 'images'];
}
