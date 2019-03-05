<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->hasMany(Categori::class,'categories','id');
    }
}
