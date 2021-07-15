@extends('layout.app')

@section('main_content')
  <div class="container_form">
    <div class="form-group">

      <form action="{{route('update', $comics->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title"></label>
        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="{{$comics->title}}">
        <small id="helpId" class="text-muted">inserisci un titolo</small>

        <label for="description"></label>
        <textarea type="text" name="description" id="description" class="form-control" rows="10" placeholder="" aria-describedby="helpId">{{$comics->description}}</textarea>
        <small id="helpId" class="text-muted"></small>

        <label for="thumb"></label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId" value="{{$comics->thumb}}">
        <small id="helpId" class="text-muted">inserisci il link</small>

        <label for="price"></label>
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