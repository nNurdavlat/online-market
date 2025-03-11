<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVolume extends Model
{
    public function products()
    {
        return $this->hasMany(ProductVolume::class, 'volume_id');
    }
}
