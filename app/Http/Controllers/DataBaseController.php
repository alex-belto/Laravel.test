<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBaseController extends Controller{

    public function data(){

        //DB::insert('INSERT INTO users (name, surname, age) values (?,?,?)', ['Pit', 'SUndo', '34']);
        //DB::delete('DELETE FROM users WHERE id = ?', [9]);
        //DB::update("UPDATE users SET name = 'alex', age = 25 WHERE id = ?", [8]);
        //$users = DB::select('SELECT * FROM users WHERE age > ?', [18]);

        $employees = DB::table('products')
           ->join('category', 'products.category_id', '=', 'category.id')
            ->select('products.*', 'category.name as category')
            ->get();

        return view ('test.test', ['employees' => $employees]);
    }
}
