@extends('layouts.app')

@section('content')
       <h1>{{$title}}</h1>
       <ul>
       @if (count($services) > 0)
       <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
       </ul>
       @endif

       <p>This is the services page</p>
@endsection
