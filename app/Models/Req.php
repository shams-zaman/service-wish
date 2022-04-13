<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Req extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_updated'
    ];
    public function sp()
    {
        return $this->hasOne(Sp::class);
    }
}
