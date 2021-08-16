<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PageController extends Controller{




       public function one(Request $request){

           $minutes = 15;
            if(!empty($request -> cookie('count'))){
                $count = $request -> cookie('count') + 1;
            }else{
                $count = 1;

            }
            echo $count;
           $cookie = cookie('count', $count, $minutes);
           return response('SetCount')->cookie($cookie);

       }

       public function two(Request $request){


        return $request -> cookie('birth');
       }

    }
