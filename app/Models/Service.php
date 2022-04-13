<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = [
        'sp_id',
        'service_name',
        'service_pic',
        'image',


    ];
    public function sp()
    {
        return $this->belongsTo(Sp::class);
    }
}
