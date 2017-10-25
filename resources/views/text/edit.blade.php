@extends('layouts.app')
@section('page','text-edit')
@section('content')
  <div class="container">
    <div class="row">
      @if(session('error'))
        <p class="bg-danger">{{session('error')}}</p>
      @endif
      {!! Form::open(['route' => ['texts.store'], 'method' => 'POST']) !!}
        <div class="form-group">
          <label for="value">Texto</label>
          {{-- <input id="value" class="form-control" type="text" name="value" value="{{$text->value}}"> --}}
          <textarea id="" class="form-control" name="value" cols="30" rows="10">
           {!! $text->value !!}
          </textarea>
        </div>
        <input type="hidden" name="id" value="{{$text->id}}">
        <input type="hidden" name="form_name" value="{{$text->form_name}}">
        <input type="hidden" name="html_hash" value="{{$text->html_hash}}">
        <a href="{{route('texts.index')}}" class="btn btn-danger pull-left" type="submit">Cancelar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
