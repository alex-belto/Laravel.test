<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

use App\Models\Role;

class UserController extends Controller{

    public function getUser($id){

        $roles = User::find($id)->roles;
        //var_dump($user);

        //$roles = User::find(1)->roles()->orderBy('name')->get();
        dd($roles);

        //return view('test.user', ['user'=>$user]);
    }

    public function getUsers(){

//        foreach(User::all() as $user){
//            $users[] = $user -> roles;
//        }

        $users = User::all();


        return view('test.user', ['users'=>$users]);
    }


}
