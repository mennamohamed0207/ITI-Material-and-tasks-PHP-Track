@extends('layout.app')

@section('content')
<h1 class="h1" >Welcome to ITI-Blogs</h1>
<a href="{{route('posts.create')}}" class="btn btn-primary" style="margin-left:50px; ">Create Post</a>
@foreach ($posts as $blog)

    <div class="card" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">{{$blog['title']}}</h5>
          <p class="card-text">{{$blog['description']}}</p>
          <img src="{{asset($blog['image'])}}" alt="" width="200px" height="200px" class="rounded"/>
          <a href="{{route('posts.show', $blog['id'])}}" class="btn btn-primary" style="margin-left:50px; ">Read more</a>
          <a href="{{route('posts.edit', $blog)}}" class="btn btn-warning" style="margin-left:50px; ">Edit post</a>
          <form action="{{ route('posts.destroy', $blog['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Delete</button>
        </form>
        </div>
      </div>

    @endforeach


@endsection