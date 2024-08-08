<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $primaryKey = 'district_id';

    protected $fillable = [
        'city_id',
        'district_name'
    ];

    public function cities()
    {
        return $this->belongsTo(City::class,'city_id');
    }
}
