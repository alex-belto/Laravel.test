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

        return view('guest.moderation', ['posts'=>$posts]);
    }

    public function editPost(Request $request, $id){

        $post = Post::find($id);
        if($request->has('submit')){
            $post -> name = $request -> input('name');
            $post -> text = $request -> input('text');
            $post -> date = $request -> input('date');

            $post -> save();

            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect('/wall/posts/');
        }

        return view('guest.edit', ['post' => $post]);
    }

    public function deletePost(Request $request, $id){

        $post = Post::find($id);
        $post -> delete();

        $request -> session() -> flash('message', 'Запись Удалена!');
        return redirect('/wall/posts/');
    }
}
