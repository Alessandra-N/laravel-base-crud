<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

    <div class="container">
        <table style="width:100%">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Immagine</th>
                <th>Prezzo</th>
            </tr>
            @foreach($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="button">
        <a href="{{route('create')}}">Add New Comic</a>
    </div>
    

    </body>
</html>
