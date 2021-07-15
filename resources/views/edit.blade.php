@extends('layout.app')

@section('main_content')
  <div class="container_form">
    <div class="form-group">

      <form action="{{route('edit'), $comics->id}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <label for=""></label>
        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="{{$comics->title}}">
        <small id="helpId" class="text-muted">inserisci un titolo</small>

        <label for=""></label>
        <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">{{$comics->description}}</small>

        <label for=""></label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId" value="{{$comics->thumb}}">
        <small id="helpId" class="text-muted">inserisci il link</small>

        <label for=""></label>
        <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId" value="{{$comics->price}}">
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
@endsection