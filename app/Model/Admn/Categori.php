<?php

namespace App\Model\Admn;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $table = 'categories';

    protected $fillable=[
        'id',
        'name_ge',
        'name_en'
    ];
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
