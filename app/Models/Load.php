<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;

    public function contracts(){
        return $this->belongsTo(Contract::class);
    }
    public function drivers(){
        return $this->belongsTo(User::class);
    }
    public function assets(){
        return $this->belongsTo(Asset::class);
    }
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
