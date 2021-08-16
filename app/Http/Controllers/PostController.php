<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{

    public function getAll($order = 'date', $dire = 'desc'){

        //if($order == 'date' OR $order == 'title' OR $order == 'id' AND $dire == 'desc' OR $dire == 'asc'){

            $posts = Post::orderBy($order, $dire)->get();
            echo $order;
            echo  $dire;
            return view('test.post', ['posts'=>$posts]);

//        }else{
//            echo 'сортировка производится только по дате, id и title';
//        }

    }

    public function getOne($id){

        if(preg_match('#\d#', $id) == 1){

            $post = Post::findOrFail($id);

            return view('test.post', ['post'=>$post]);
        }
    }

    public function newPost(Request $request){

        if($request -> has('text') AND $request -> has('title')
            AND $request -> has('desc') AND $request -> has('date')){

            $post = new Post;
            $post -> title = $request -> input('title');
            $post -> desc = $request -> input('desc');
            $post -> text = $request -> input('text');
            $post -> date = $request -> input('date');
            $post -> save();
        }else{
            return view('test.newPost', ['request' => $request]);
        }

    }

    public function editPost(Request $request, $id){

        $post = Post::find($id);

        if($request -> has('submit')){
            $post -> title = $request -> title;
            $post -> desc = $request -> desc;
            $post -> text = $request -> text;
            $post -> date = $request -> date;

            $post -> save();

            $request -> session() -> flash('message', 'Запись успешно редактирована');
            $request -> session() -> flash('id', $id);
            $request -> session() -> flash('title', $request -> title);
            return redirect('/post/all');
        }

        return view('test.editPost', ['post'=>$post]);
    }

    public function delPost(Request $request, $id){

        $post = Post::find($id);
        $post -> delete();

        $request -> session() -> flash('message', 'Запись успешно удалена');
        $request -> session() -> flash('id', $id);
        $request -> session() -> flash('title', $post -> title);
        return redirect('/post/all');
    }

    public function getDeletedPost(){

        $posts = Post::onlyTrashed()->get();

        return view('test.post_deleted', ['posts'=>$posts]);

    }

    public function restorePost(Request $request, $id){

        Post::onlyTrashed()
            ->where('id', $id)
            ->restore();
        $request -> session() -> flash('message', 'Запись успешно востановленна');
        return redirect('/post/all');
    }

}
