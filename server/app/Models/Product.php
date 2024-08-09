<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name',
        'power',
        'brand',
        'type',
        'image',
        'category'
    ];

    public function features()
    {
        return $this->hasMany(Feature::class,'product_id');
    }
}
