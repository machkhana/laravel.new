<?php

namespace App\Http\Controllers\Web;

use App\Model\Web\Categori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    protected $categories, $products;

    public function __construct()
    {
        //$this->categories = Categori::all();
        $this->categories = DB::table('categories');
        $this->products = DB::table('products');
    }
    public function index(){
        $categories = $this->categories->get();
        return view('web.product.index')
            ->with('categories',$categories);
    }
    public function show($cat){
        /*$cat_id=$this->categories
            ->where('name_ge',$cat)
            ->get();*/
        $productshow = $this->products
            ->where('cat_id',$cat)
            ->get();
        return view('web.product.show')
            ->with('productshow',$productshow)
            ->with('categories',$this->categories->get());
    }
    public function select($cat,$id){
        $productshow = $this->products
            ->where('id',$id)
            ->get();
        $cat=$this->categories->where('id',$cat)->get();
        return view('web.product.show')
            ->with('productshow',$productshow)
            ->with('categories',$this->categories->get());
    }
}
