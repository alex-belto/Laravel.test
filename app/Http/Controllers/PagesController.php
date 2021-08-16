<?php


    namespace App\Http\Controllers;


    class PagesController extends Controller
{
    public function showOne($num1, $num2){
        if(preg_match('#\d#', $num1) == 1 && preg_match('#\d#', $num2)){
            return $num1 + $num2;
        }
        
    }
    public function showAll(){
        return 'all';
    }
}
