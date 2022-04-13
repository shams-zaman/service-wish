<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sp extends Model
{
    protected $table = 'sps';
    use HasFactory;
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
    public function req()
    {
        return $this->belongsTo(Req::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeSearch($query, $val)
    {
        return $query
            ->where('ag_name', 'like', '%' . $val . '%');
        // ->orWhere('desc', 'like', '%' . $val . '%');
        // ->orWhere('tag', 'like', '%' . $val . '%')
        // ->orWhere('id', 'like', '%' . $val . '%');
    }
}
