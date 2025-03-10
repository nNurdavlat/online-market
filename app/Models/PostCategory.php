<?php

namespace App\Models;


use \Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }
}
