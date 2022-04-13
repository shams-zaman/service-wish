<?php

namespace App\Models;

use App\Models\Sp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cat extends Model
{
    use HasFactory;
    protected $table = 'cats';
    public function sps()
    {
        return $this->hasMany(Sp::class);
    }
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_cat');
    }
}
