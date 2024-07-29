@extends('layout.app')

@section('content')

<h1 class="h1" >Update Post</h1>

<form  method="POST"  action="{{route('posts.update')}}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$post['title']}}">  
    </div>
    
    <div class="mb-3">
        <input type="hidden" class="form-control" id="id" name="id" value="{{$post['id']}}">  
      </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$post['description']}}">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" value="{{asset($post['image'])}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection