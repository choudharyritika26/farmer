<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Singleproduct extends Model
{
    use HasFactory;
    protected $table = 'singleproducts';
    protected $fillable = [
        'heading',
        'description',
        'image',
    ];

    public function productHeading()
    {
        // Assuming the foreign key is 'product_id' in the SingleProduct table
        return $this->belongsTo(Product::class, 'product');
    }
}
