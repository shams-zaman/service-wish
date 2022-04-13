<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag')->withTimestamps();
    }
    public function cats()
    {
        return $this->belongsToMany(Cat::class, 'blog_cat')->withTimestamps();
    }
    public function scopeSearch($query, $val)
    {
        return $query
            ->where('title', 'like', '%' . $val . '%')
            ->orWhere('desc', 'like', '%' . $val . '%')
            // ->orWhere('tag', 'like', '%' . $val . '%')
            ->orWhere('id', 'like', '%' . $val . '%');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
