<?php

namespace App\Model\Admn;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table='products';
    protected $fillable=[
        'id',
        'title_ge',
        'title_en',
        'description_ge',
        'description_en',
        'text_ge',
        'text_en',
        'price',
        'cat_id'
    ];
    public function categories(){
        return $this->belongsToMany(Categori::class, 'categories','cat_id','id');
    }
}
