<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use \DB;
use App\Http\Controllers\Controller;
use App\Model\Web\Categori;

class CategoryController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new Categori();
    }
    public function index(){
        $categoryes = $this->category->all();
        return view('web.home.index')->with('categoryes',$categoryes);
    }
}