<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller{

        public function form(Request $request){

            if ($request -> is('public/test/*')) {
                echo 'da';
            }else{
                echo 'net'.'<br>';
            }

            if($request -> session() -> has('name')){
                return $request -> session() -> get('name');
            }else{
                $request -> session() -> put('name', 'alex');
                return $request -> session() -> get('name');
            }
           $request -> session() -> put('str', 'asdasd');
           $request -> session() -> put('str1', 'azxsdfsd');
           $request -> session() -> put('str2', 'ashjkhksd');
           session(['deer'=>'/fallup']);


            //return $request -> session() ->get('str');

        }

        public function method(Request $request){

            return $request -> session() ->all();
        }


}
