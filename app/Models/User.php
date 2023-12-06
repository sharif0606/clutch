<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function loads(){
        return $this->hasMany(Load::class);
    }
    public function assets(){
        return $this->hasMany(Asset::class);
    }
}
