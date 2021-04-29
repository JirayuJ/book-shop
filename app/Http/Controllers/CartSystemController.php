<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Log;

class CartSystemController extends Controller
{
    //
    public function addItem(Request $request , $id)
    {
        Log::info('addItem : ');
        $product = Product::find($id);
        $options = null;
        $total = null;

        Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' =>  $product->name,
            'price' =>$product->price,
            'quantity' => 1,
            'attributes' => array( 
                'image_name' => $product->image_name,
            )
        ));

        $cartCollection = Cart::getContent();


        Log::info('cartCollection : '.json_encode($cartCollection));
        Log::info('count : '.Cart::getContent()->count() );


        $products = Product::all();
        return back();
    }

    public function detail()
    {
        // Cart::clear();
        $total = NULL;
        $cartCollection = Cart::getContent();

        Log::info('cartCollection : '.json_encode($cartCollection));

        foreach($cartCollection as $list){
            $total += $list->price *  $list->quantity;
            Log::info('total : '.$total);
        }

       
        return view('cart.order-detail',  compact('cartCollection', 'total'));
        
    }

    public function update(Request $request){

        // $count = count($request->item_id);

        Log::info(' update  request : '.json_encode($request->all()));
        
            Cart::update($request->id , array(
                'quantity' => $request->quantity), // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            );
   
        return back();
      
    }

    public function clear()
    {
        Log::info("111");
        Cart::clear();
        return redirect('/');

        // return view('home');
    }
    
}
