@extends('layouts.app')
@section('page','image-edit')
@section('content')
  <div class="container">
    <div class="row">
      @if(session('error'))
        <p class="bg-danger">{{session('error')}}</p>
      @endif
      {!! Form::open(['route' => 'images.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
          <label for="image">Imagem</label>
          <input id="image" class="form-control" type="file" name="image">
        </div>
        <div class="form-group">
          <label for="color">Color</label>
          <input id="color" class="form-control" type="text" name="color" value="{{$image->color}}">
        </div>
        <div class="form-group col-lg-12">
          <img style="max-width:100%;" src="{{ asset('image/') }}/{{$image->image}}">
        </div>
        <input type="hidden" name="id" value="{{$image->id}}">
        <input type="hidden" name="html_hash" value="{{$image->html_hash}}">
        <a href="{{route('images.index')}}" class="btn btn-danger pull-left" type="submit">Cancelar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
