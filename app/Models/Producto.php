<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use MongoDB\Laravel\Eloquent\Model;// 1. des pues de crear modelosinstance of the MongoDB Laravel Eloquent Model

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;
}
