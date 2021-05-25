<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'title',
        'summary',
        'model',
        'price',
        'quantity',
        'content',
        'type',
        'product_sign',
        'color',
        'energy',
        'warranty',
        'created_at',
        'updated_at'
    ];

    public function images(){
        return $this->hasMany(Image::class, 'products_id');
    }


}
