<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Season;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(6);
        return view('index', compact('products'));
    }

    public function detail(Request $request){
        $productId = $request->id;
        $product = Product::find($productId);
        $seasons = $product->seasons;
        return view('detail', ['product' => $product, 'seasons' => $seasons]);
    }

    public function register(Request $request){
        return view('register');
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create($product);
        return redirect('/products');
    }

    public function destroy(Request $request){

    }
}
