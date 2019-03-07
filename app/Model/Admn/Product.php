<?php

namespace App\Model\Admn;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable=[
        'title_ge',
        'title_en',
        'description_ge',
        'description_en',
        'text_ge',
        'text_en',
        'price'
    ];
    public function categori(){
        return $this->hasMany(Categori::class);
    }
}
