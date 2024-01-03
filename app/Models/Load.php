<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;

    public function contracts(){
        return $this->belongsTo(Contract::class,'contract_id','id');
    }
    public function drivers(){
        return $this->belongsTo(User::class,'driver_id','id');
    }
    public function assets(){
        return $this->belongsTo(Asset::class,'asset_id','id');
    }
    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
