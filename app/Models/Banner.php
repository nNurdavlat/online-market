<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['title', 'description', 'image', 'position', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
