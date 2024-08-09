<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $primaryKey = 'feature_id';

    protected $fillable = [
        'product_id',
        'feature'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
