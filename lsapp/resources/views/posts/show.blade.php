@extends('layouts.app')

@section('content')

<a href="../posts" class="btn btn-default">Go Back</a>
<div class="card">
        <div class="card-header">
        <h3><a href="./posts/{{$post->id}}">{{$post ->title}}</a></h3>
    </div>
    <div class="card-body">
    <p>{{$post->body}}</p>
      
    </div>
    <div class="card-footer text-muted">
            Writted on {{$post ->created_at}}
    </div>
   
    </div>
 
@endsection