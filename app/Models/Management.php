<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $table = 'management';
    protected $fillable = [
        'heading',
        'description',
        'image',
    ];
    public function aboutusheading()
    {
        // Assuming the foreign key is 'product_id' in the SingleProduct table
        return $this->belongsTo(AboutUsList::class, 'aboutuslist');
    }
}
