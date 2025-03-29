<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Season;


class ProductController extends Controller
{
    //s
    public function index(){
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function detail(Request $request){
        $productId = $request->id;
        $seasons = Product::find($productId)->seasons;
        dd($seasons);
        $product = Product::find($productId);
        return view('detail', ['product' => $product]);
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
