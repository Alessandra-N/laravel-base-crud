@extends('layout.app')

@section('main_content')

<div class="show_container">

    <h1>{{$comics->title}}</h1>
    <img src="{{$comics->thumb}}" alt="">
    <p>{{$comics->description}}</p>
    <h2>Price: {{$comics->price}}$</h2>

</div>

<div class="button">
    <a href="{{route('index')}}">Go back to index</a>
</div>



@endsection