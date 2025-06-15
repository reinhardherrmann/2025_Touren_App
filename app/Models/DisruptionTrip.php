<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisruptionTrip extends Model
{
    protected $table = 'disruptions_trips';

    protected $fillable = ['disruption_id','trip_id'];
}
