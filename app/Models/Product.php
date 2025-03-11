<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    public function productVolume()
    {
        return $this->belongsTo(ProductVolume::class, 'volume_id', 'volume_id');
    }
}
