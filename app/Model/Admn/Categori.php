<?php

namespace App\Model\Admn;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
