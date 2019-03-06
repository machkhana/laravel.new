<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $fillable =['name_ge','name_en'];

    public function product(){
        return $this->belongsToMany(Product::all());
    }
}
