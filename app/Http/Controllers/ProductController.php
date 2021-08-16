<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Event;

class ProductController extends Controller{

    public function getCategory($id){

        $products = Category::find($id) -> products;

        return view('test.product', ['products'=>$products]);
    }

    public function getCategories(){

        $products = Product::all();
        //dd($products);
        return view('test.product', ['products'=>$products]);
    }

    public function hasThrough(){

        $category = Category::all();

        return view('test.product', ['categories'=>$category]);

    }

}
