<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationType extends Model
{
    use HasFactory;

    protected $primarykey = 'station_type_id';

    protected $fillable = [
        'station_type_name'
    ];
}
