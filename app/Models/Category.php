<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;

    public function scopeIsActive($query) {
        $query->where('status', static::STATUS_ACTIVE);
    }

    public function getImage()
    {
        $path   = '/img/category/';
        return url($path.$this->image);
    }
}
