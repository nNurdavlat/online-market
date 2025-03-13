<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    public function productVolume()
    {
        return $this->belongsTo(ProductVolume::class, 'volume_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
