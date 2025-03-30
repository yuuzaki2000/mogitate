<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\RegisterRequest;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function show(Request $request){
        if($request->order == 1){
            $products = Product::orderByColumnDesc('price')->get();
        }else if($request->order == 2){
            $products = Product::orderByColumnAsc('price')->get();
        }else{
            /* $products = Product::paginate(6); */
            $products = Product::all();
        }
        return view('index', compact('products'));
    }

    public function detail(Request $request){
        $productId = $request->id;
        $product = Product::find($productId);
        $seasons = $product->seasons;
        return view('detail', ['product' => $product, 'seasons' => $seasons]);
    }

    public function add(){
        return view('register');
    }

    public function store(RegisterRequest $request){
        $product = $request->only(['name', 'price', 'image', 'description']);
        Product::create($product);
        $season = $request->only(['seasons']);
        $product_this = Product::find(Product::latest()->first()->id);
        $product_this->seasons()->sync($request->seasons);
        return redirect('/products');
    }

    public function update(RegisterRequest $request){
        $form = $request->all();
        Product::find($request->id)->update($form);
        return redirect('/products');
    }

    public function search(Request $request){
        $products = Product::where('name', 'like', "%{$request->keyword}%")->paginate(6);
        return view('index', compact('products'));

    }

    public function destroy(Request $request){
        //削除（ゴミ箱）ボタンを押したときの処理を記載
        $product = Product::find($request->id);
        $product->delete();
        return redirect('/products');
    }
}
