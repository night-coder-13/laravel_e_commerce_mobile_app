<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'products';
    protected $guarded = [];

    public function sizes(){
        return $this->hasMany(sizingProducts::class);
    }
    public function images(){
        return $this->hasMany(ProductImage::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function collection(){
        return $this->belongsTo(collections::class);
    }
    public function brand(){
        return $this->belongsTo(Brands::class);
    }
}
