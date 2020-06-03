<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart ; 

use App\Product ; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        if(request()->categorie){
               $products =  Product::with('categories')->whereHas('categories', function($query){
                  $query->where('slug' , request()->categorie);  
                })->orderBy('created_at', 'DESC')->paginate(4) ; 
        }else {
            $products = Product::with('categories')->paginate(6) ; 
        }
        

       

        return view('products.index')->with('products', $products) ;
    }

    public function show($slug) {

        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }

    public function search(Request $request) {

        request()->validate([
            'q' => 'required|min|6'
        ]) ; 

        $q = request()->input('q') ; 

        $products = Product::where('title', 'like', "%$q%")
                     ->orWhere('description' , 'like' , "%$q%")
                     ->paginate(6) ; 

        return view('products.search')->with('products', $products) ; 



    }
}
