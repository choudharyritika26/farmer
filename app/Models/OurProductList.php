<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProductList extends Model
{
    use HasFactory;
    protected $table = 'our_product_lists';
    protected $fillable = [
        'heading',
        'description',
        'image',
    ];
}
