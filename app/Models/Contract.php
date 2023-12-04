<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function loads(){
        return $this->hasMany(Load::class);
    }

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
