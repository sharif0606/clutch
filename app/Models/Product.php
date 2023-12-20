<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function loads(){
        return $this->hasMany(Load::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }

    public function units(){
        return $this->belongsTo(Unit::class,'unit_id');
    }
    public function type(){
        return $this->belongsTo(ProductType::class,'product_type_id');
    }
}
