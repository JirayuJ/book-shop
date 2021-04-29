<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
     
use App\User;
use DataTables;
use Log;
use Auth;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = User::latest()->get();
    //         return Datatables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){
   
    //                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
    //                         return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }
      
    //     return view('home');
    // }
    public function index()
    {
        return view('home');
    }

    public function order(Request $request)
    {
        $userId = auth()->user()->id;
        // Log::info("order: ".json_encode($request->all()));
        if ($request->ajax()) {


            $order = DB::table('order_detail')
            ->join('orders', 'orders.id', '=', 'order_detail.order_id')
            ->join('products', 'products.id', '=', 'order_detail.product_id')
            ->where('orders.user_id' , '=', $userId)
            ->select(
                    'products.*', 
                    'order_detail.qty as qty' , 
                    'orders.total_price as total_price' , 
                    'orders.invoce_number as invoce_number' , 


                );
            // ->get();
        Log::info("order: ".json_encode($order));

            // $data = User::latest()->get();
            return Datatables::of($order)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        // return view('home');
    }

    public function adminHome()
    {
        return redirect('admin');
        // return view('admin.index');
    }


}
