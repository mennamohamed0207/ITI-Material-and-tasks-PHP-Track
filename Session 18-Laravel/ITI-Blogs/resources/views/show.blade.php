@extends('layout.app')

@section('content')
<h1 class="h1" >Post {{$post['id']}}</h1>


    <div class="card" style="width: 36rem;">
        <div class="card-body">
          <h5 class="card-title">{{$post['title']}}</h5>
          <p class="card-text">{{$post['description']}}</p>
          <img src="{{asset($post['image'])}}" alt="" width="200px" height="200px" class="rounded"/>
        </div>
      </div>



@endsection