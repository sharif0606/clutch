<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function loads(){
        return $this->hasMany(Load::class,'contract_id');
    }

    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
