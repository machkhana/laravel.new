<?php

namespace App\Http\Controllers\Web;

use App\Model\Web\Categori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new Categori();
    }

    public function index(){
        //$categoryes=$this->category->all();
        $categoryes=DB::table('categories')->get();
        return view('web.home.index')->with('categoryes',$categoryes);
    }
}
