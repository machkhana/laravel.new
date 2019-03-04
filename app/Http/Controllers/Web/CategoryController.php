<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Web\Category;

class CategoryController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new Category();
    }
    public function index(){
        $categoryes = $this->category->all();
        return view('web.category.index')->with('categoryes',$categoryes);
    }
}