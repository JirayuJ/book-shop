<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Cart;
use Auth;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use App\Product;
use App\Address;
use App\Order;
class CheckoutController extends Controller
{
    public function index(Request $request){

        $total = $request->total;
        $cartCollection = json_decode($request->cartCollection  , true);

        
        // $count = count($request->item_id);

        foreach(json_decode($request->cartCollection  , true) as $list){
            // $total += $list->price *  $list->quantity;
            Log::info('list : '.json_encode($list));
        }

        Log::info(' CheckoutController  all : '.json_encode($request->all()));

        Log::info(' CheckoutController  request : '.json_encode($request->cartCollection));
        
            // Cart::update($request->id , array(
            //     'quantity' => $request->quantity), // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            // );
        return view('checkout.index',  compact('cartCollection', 'total'));
      
    }

    public function confirm(Request $request)
    {
            $userId = auth()->user()->id;
            $cartCollection = Cart::getContent();
        
            // $string = str_random(15);
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];

            $order_code = str_shuffle($pin);
            $total_price = null;
           


            $address = [
                'firstName'           => $request->firstName ?? '',
                'lastName'          => $request->lastName  ?? '',
                'country'           => $request->country ?? '',
                'address'         => $request->address ?? '',
                'district'         =>  $request->district ?? '',
                'county'          =>  $request->county ?? '',
                'province'          =>  $request->province ?? '',
                'postcode'           =>  $request->postcode ?? '',
                'delivery'           =>  $request->delivery ?? '',
                'payment'           =>  $request->payment ?? '',
            ];
            $address_data = Address::create($address);
            $address_data->save();
            // $address_data->id;


             // create DB  Address
             $order_data = [
                'invoce_number'           => $order_code ?? '',
                'total_price'          => $request->sum  ?? '',
                'user_id'           =>  $userId,
                'address_id'         => $address_data->id ?? '',
            ];
            $order = Order::create($order_data);
            $order->save();



            foreach($cartCollection as $list){
                $product = Product::find($list->id);
                $price = $list->price - ($list->price * $product->discount/100);

                
                // $pro->price - ($pro->price * $pro->discount/100 )
                $order_product  = [
                    'product_id'        => $list->id,
                    'order_id'          => $order->id,
                    'qty'               => $list->quantity,
                    'price'             => $price,
                ];
                DB::table('order_detail')->insert($order_product);
            }

            

       
        Log::info(' confirm  all : '.json_encode($request->all()));
        Log::info(' address_data  all : '.json_encode($address_data));
        Log::info(' cartCollection  all : '.json_encode($cartCollection));



    }
}
