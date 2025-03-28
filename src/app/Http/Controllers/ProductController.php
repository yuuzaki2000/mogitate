<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;


class ProductController extends Controller
{
    //s
    public function index(){
        $product_first = Product::find(1);
        $product_first->seasons()->sync([3,4]);
        $product_second = Product::find(2);
        $product_second->seasons()->sync(1);
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function bind(Product $productId){
        return view('detail', ['product' => $productId]);
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create($product);
        return redirect('/products');
    }
}
