<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index()
    {
        PaginationPaginator::useBootstrap();
        $posts = Post::all();
        $pagination=Post::paginate(10);
        return view('index', ['posts' => $pagination]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        // dump($post);
        if($post) {
            return view('show', ['post' => $post]);
        }else {
            return abort(404);
        }
    }
    public function create()   
    {
        return view('create');
    } 
    public function store(Request $request)
    {
        $post = new Post();
       
        // dump($request->all());
        $post->title = $request->title;
        $post->description = $request->description;
        $file = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $post->image = $originalName;

        $post->save();
        return redirect('/home');
    }
    public function edit($id)
    {
        $post = Post::find($id);
        // dump($post);
        if($post) {
            return view('edit', ['post' => $post]);
        }else {
            return abort(404);
        }
    }
    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        // dump($request->all());
        if($request->hasFile('image')) {
            $file = $request->file('image');

        $originalName = $file->getClientOriginalName();
        $post->image = $originalName;
        $destinationPath = 'uploads/images';
        $file->move($destinationPath, $originalName);
        }
        $post->save();
        return redirect('/home');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/home');
    }

}
