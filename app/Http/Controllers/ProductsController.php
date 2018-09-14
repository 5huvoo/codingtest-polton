<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ProductsController extends Controller
{
    
    public function index()
              {
                 
               
                
                $product_list = DB::table('products')
                ->select('product_name')
                     ->get();

                 return view('dynamic')->with('product_list',$product_list);
              }



 function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('products')
       ->where($select, $value)
       ->equals($dependent)
       ->get();
     $output = $dependent;
     
     
     echo $output;
    }


}
