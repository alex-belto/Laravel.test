<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class GuestBookController extends Controller
{
    public function getPosts(Request $request){

        if($request -> has('submit')){
            $post = new Post;
            $post -> name = $request -> name;
            $post -> text = $request -> text;
            $post -> date = $request -> date;
            $post -> save();

            $request -> session() -> flash('message', 'Запись успешно добавлена!');
        }

        $posts = Post::orderBy('date', 'desc')-> get();


        return view('guest.posts', ['posts'=>$posts]);
    }
    public function moderation(){

        $posts = Post::orderBy('date', 'desc')-> get();

        return view('guest.posts', ['posts'=>$posts]);
    }
}
