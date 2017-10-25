@extends('layouts.app')
@section('page','notice-edit')
@section('content')
  <div class="container">
    <div class="row">
      @if(session('error'))
        <p class="bg-danger">{{session('error')}}</p>
      @endif
      @if(session('success'))
        <p class="bg-success">{{session('success')}}</p>
      @endif
      {!! Form::open(['route' => 'notices.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" type="text" name="titulo" value="{{$notice->title}}">
      </div>
      <div class="form-group">
        <label for="sub_title">Sub titulo</label>
        <input id="sub_title" class="form-control" type="text" name="sub_title" value="{{$notice->sub_title}}">
      </div>
      <div class="form-group">
        <label for="description_short">Breve descrição</label>
        <textarea id="description_short" class="form-control" name="description_short" cols="30" rows="10">{!! $notice->description_short !!}</textarea>
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea id="description" class="form-control" name="description" cols="30" rows="10">{!! $notice->description !!}</textarea>
      </div>
      <div class="form-group">
        <label for="image">Imagem</label>
        <input id="image" class="form-control" type="file" name="image">
      </div>
      <div class="form-group">
        <img style="max-width:100%;" src="{{ asset('image/') }}/{{ $notice->image }}" alt="">
      </div>
      <input type="hidden" name="id" value="{{$notice->id}}">
      <a href="{{route('notices.index')}}" class="btn btn-danger pull-left" type="submit">Cancelar</a>
      <button class="btn btn-success pull-right" type="submit">Salvar</button>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
