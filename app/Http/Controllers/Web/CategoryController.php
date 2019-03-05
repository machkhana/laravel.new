<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Categori;

class CategoryController extends Controller
{
    public function index(){
        return view('web.product.index');
    }
}