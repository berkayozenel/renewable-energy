<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'city_id';

    protected $fillable = [
        'city_name'
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'city_id');
    }

    public function countries()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
