<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller{

    public function getUser($id){

        $user = User::find($id)->profile;
        //var_dump($user);

        return view('test.user', ['user'=>$user]);
    }

    public function getUsers(){

        foreach(User::all() as $user){
            $users[] = $user -> profile;
        }


        return view('test.user', ['users'=>$users]);
    }
}
