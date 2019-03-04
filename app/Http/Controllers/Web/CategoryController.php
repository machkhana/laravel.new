<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Category extends Controller
{
    public $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function category(){

        return view('partials.categoryes')->with('categoryes',$this->category);
    }
}