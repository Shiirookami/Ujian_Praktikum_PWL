<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageIdea extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'image'
    ];
}
