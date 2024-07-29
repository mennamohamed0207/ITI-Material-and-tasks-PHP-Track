<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Initial hardcoded posts
    private $initialPosts = [
        [
            'id' => 1,
            'title' => 'Post 1',
            'description' => 'Description 1',
            'image' => '1.jpeg'
        ],
        [
            'id' => 2,
            'title' => 'Post 2',
            'description' => 'Description 2',
            'image' => '2.jpeg'
        ],
        [
            'id' => 3,
            'title' => 'Post 3',
            'description' => 'Description 3',
            'image' => '3.jpeg'
        ]
    ];

    private function getPosts()
    {
        // Get posts from session or use initial posts if not set
        return session('posts', $this->initialPosts);
    }

    private function setPosts($newPosts)
    {
        // Store posts in session
        session(['posts' => $newPosts]);
        return $newPosts;
    }

    public function create()
    {
        return view('create');
    }

    public function index()
    {
        $posts = $this->getPosts();
        return view('index', ['posts' => $posts]);
    }

    public function findPost($id, $posts)
    {
        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null; // Return null if not found
    }

    public function show($id)
    {
        $posts = $this->getPosts();
        $post = $this->findPost($id, $posts);
        if ($post) {
            return view('show', ['post' => $post]);
        }
        return abort(404); // Return 404 if post not found
    }

    public function store(Request $request)
    {
        $posts = $this->getPosts();
        $post = $request->all();
        $post['id'] = end($posts)['id'] + 1;

        // Get the uploaded file
        $file = $request->file('image');

        // Get the original name of the file
        $originalName = $file->getClientOriginalName();
        $post['image'] = $originalName;

        // Optionally, you can move the file to a desired directory
        $destinationPath = 'uploads/images';
        $file->move($destinationPath, $originalName);

        // Append the new post to the posts array
        $posts[] = $post;
        $newPosts = $this->setPosts($posts);
        // dump($newPosts);
        return view('index', ['posts' => $newPosts]);
    }
public function edit($id)
{
    $posts = $this->getPosts();
    $post = $this->findPost($id, $posts);
    if ($post) {
        return view('edit', ['post' => $post]);
    }
    return abort(404); // Return 404 if post not found
}

public function update(Request $request)
{
    $id=$request->id;
    $posts = $this->getPosts();
    foreach ($posts as &$post) {
        if ($post['id'] == $id) {
            $post['title'] = $request->title;
            $post['description'] = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $originalName = $file->getClientOriginalName();
                $post['image'] = $originalName;
                $destinationPath = 'uploads/images';
                $file->move($destinationPath, $originalName);
            }
            break;
        }
    }
    $newPosts = $this->setPosts($posts);
    return redirect()->route('posts.index');
}

public function destroy($id)
{
    $posts = $this->getPosts();
    foreach ($posts as $key => $post) {
        if ($post['id'] == $id) {
            unset($posts[$key]);
            break;
        }
    }
    $newPosts = $this->setPosts($posts);
    return redirect()->route('posts.index', ['posts' => $newPosts]);
}
}
