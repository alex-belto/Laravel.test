<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;


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
    public function test(){

//        $role = new Role(['name'=>'guest']);
//
//        $user = User::find(3);

//        $user->roles()->save($role);

//        $event = Event::find(2);
//        $product = Product::find(3);
//
//        $event -> products() -> associate($product);
//        $event -> save();

        $user = User::find(2);
        $roleId = Role::find(3) -> id;

        $user -> roles() -> detach($roleId);


        echo 'продукт добавлен!';
    }

}
