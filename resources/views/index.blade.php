@extends('layout.app')

@section('main_content')

<div class="container_index">
        <table style="width:100%">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Immagine</th>
                <th>Prezzo</th>
                <th>Azioni</th>
            </tr>
            @foreach($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}$</td>
                <td>
                    <a href="{{route('show', $comic->id)}}">View</a> | Edit | Delete</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="button">
        <a href="{{route('create')}}">Add New Comic</a>
    </div>
@endsection