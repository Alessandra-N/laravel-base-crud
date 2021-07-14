<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <div class="container_form">
    <div class="form-group">

      <form action="{{route('store')}}" method="POST">
        {{ csrf_field() }}
        <label for=""></label>
        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci un titolo</small>

        <label for=""></label>
        <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci descrizione</small>

        <label for=""></label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci il link</small>

        <label for=""></label>
        <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">inserisci il prezzo</small>

        <div class="submit">
          <button>Submit</button>
        </div>
        

      </form>

    </div>
      <div class="button">
        <a href="{{route('index')}}">Go back to DB</a>
      </div>
  </div>
    
  </body>
</html>