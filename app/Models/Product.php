<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function discounts() {
        return $this->belongsToMany(Discount::class, 'discount_product');
    }


    protected $fillable =
        [
            'product_id',
            'name',
            'description',
            'price',
            'sale_price',
            'category_id',
            'volume_id',
            'stock_quantity',
            'pilgrim_id',
        ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');

    }

    public function volume()
    {
        return $this->belongsTo(Volume::class, 'volume_id', 'id');
    }
    public function pilgrim_count()
    {
        return $this->belongsTo(Pilgrim::class, 'pilgrim_id', 'id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
