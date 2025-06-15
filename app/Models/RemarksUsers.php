<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RemarksUsers extends Model
{
    protected $fillable = [
        'user_id','remark_id','date'
    ];
}
