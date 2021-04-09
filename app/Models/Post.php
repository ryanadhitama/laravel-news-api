<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;

    public function scopeIsActive($query) {
        $query->where('status', static::STATUS_ACTIVE);
    }

    public function getImage()
    {
        $path   = '/img/post/';
        return url($path.$this->image);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function hits()
    {
        return $this->hasMany('App\Models\PostHits');
    }
}
