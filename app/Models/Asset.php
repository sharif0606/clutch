<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public function loads(){
        return $this->hasMany(Load::class);
    }

    public function drivers(){
        return $this->belongsTo(User::class,'driver_id');
    }
}
