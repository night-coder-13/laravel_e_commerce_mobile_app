<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $guarded = [];

    // تغیرر مقدار وضعیت در حالت ناموجودی
    public function getStatusAttribute()
    {
        // if ($this->quantity === 0) {
        //     $sizeEntry = sizingProducts::where('quantity', '>', 1)
        //         ->where('product_id', $this->id)
        //         ->first();
        //     if (!$sizeEntry) {
        //         return false; // اگر سایز موجود نیست، وضعیت False
        //     }
        //     return true; // اگر سایز موجود است
        // } elseif ($this->quantity > 0) {
        //     return true; // محصول موجود است
        // } else {
        //     return false; // وضعیت پیش‌فرض
        // }
        if ($this->quantity > 0) {
            return true;
        }
        // بررسی وجود سایزهای دیگر محصول با موجودی بالاتر
        $sizeExists = sizingProducts::where('product_id', $this->id)
            ->where('quantity', '>', 0)
            ->exists();
    
        return $sizeExists;
    }

    public function sizes()
    {
        return $this->hasMany(sizingProducts::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->where('status', 1);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function collection()
    {
        return $this->belongsTo(collections::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
}
