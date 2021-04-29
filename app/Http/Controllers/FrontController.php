<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Cart;

use App\Product;
use App\Type;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){

        $products = Product::all();
        // $products = DB::table('products')->get();
        // dd($products);

        return view('front.index',  compact('products'));
        // return view('front.index');
    }

    public function detail($id)
    {

        Log::info("detail");
        $product = Product::find($id);

        
        $price_total = $product->price - ($product->price * $product->discount/100 );

        Log::info("price_total : ".json_encode($price_total));
      
        return view('front.detail',  compact('product' , 'price_total'));
    }

    public function new_product(){
        $products = DB::table('products')
            ->join('types', 'types.id', '=', 'products.type_id')
            ->where('products.type_id' , '=', 1)
            ->select('products.*', 'types.name as type_name')
            ->get();

        return view('front.new',  compact('products'));        
    }

    public function best_selling(){
        $products = DB::table('products')
            ->join('types', 'types.id', '=', 'products.type_id')
            ->where('products.best_selle' , '=', 1)
            ->select('products.*', 'types.name as type_name')
            ->get();

        return view('front.best',  compact('products'));        
    }

    public function discount(){
        $products = DB::table('products')
            ->join('types', 'types.id', '=', 'products.type_id')
            ->where([
                ['products.discount' , '<>', NULL],
                ['products.discount' , '>', 0]
                ])
            ->select('products.*', 'types.name as type_name')
            ->get();

        return view('front.discount',  compact('products'));        
    }

    public function recommend_product(){
        $products = DB::table('products')
            ->join('types', 'types.id', '=', 'products.type_id')
            ->where('products.type_id' , '=', 3)
            ->select('products.*', 'types.name as type_name')
            ->get();

        return view('front.recommend',  compact('products'));        
    }

    
}
