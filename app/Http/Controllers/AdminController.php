<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use DataTables;
use Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function product()
    {
        
        $products = DB::table('products')
        ->join('types', 'types.id', '=', 'products.type_id')
        ->select(
            'products.*', 
            'types.name as type_name'
        )  
        ->get();
        Log::info("products: ".json_encode($products));

            // $data = User::latest()->get();
            return Datatables::of($products)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
  
    }

    

}
