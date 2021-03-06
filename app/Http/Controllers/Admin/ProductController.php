<?php

namespace App\Http\Controllers\admin;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admn\Product;
use App\Model\Admn\Categori;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    protected $products,$categories;

    public function __construct()
    {
        $this->products = new Product();
        $this->categories = new Categori();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectproduct = $this->products->get();
        return view('admin.product.index')
            ->with('products',$selectproduct);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create')
            ->with('categories',$this->categories->all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $prodRequest=$request->toArray();
            $this->products->create($prodRequest);
            return redirect()->route('admin.products.index');
        } catch (\Exception $e) {
            return redirect(route('admin.products.create'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = $this->categories->all();
        $products = $this->products->where('id',$id)->first();
        $selected_cat = $this->categories->find($products->cat_id);
        return view('admin.product.edit')
            ->with('products',$products)
            ->with('selected_cat',$selected_cat)
            ->with('categories',$categories);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, int $id)
    {
        $item = $this->products->find($id);
        if(empty($item)){ }
        try {
            $prodRequest=$request->toArray();
            $this->products->find($id)->update($prodRequest);
            return redirect()->route('admin.products.index');
        } catch (\Exception $e) {
            return redirect(route('admin.products.create'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        try{
            $this->products->find($id)->delete();
            return redirect()->route('admin.products.index');
        }catch (\Exception $e){
            return redirect(route('admin.products.index'))->with('error');
        }
    }
}
