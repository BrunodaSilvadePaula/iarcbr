@extends('layouts.app')
@section('page', 'text')
@section('content')
  <div class="container">
    <div class="row">
      @if(session('error'))
        <p class="bg-danger">{{session('error')}}</p>
      @endif
      {{-- <div class="col-lg-12"> --}}
      {{--   <button id="new-contract" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="bottom" title="Novo contrato"><i class="material-icons">add</i></button> --}}
      {{-- </div> --}}
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Local</th>
              <th>Valor</th>
              <th></th>
            </tr>
            <tbody>
              @foreach($texts as $text)
                <tr>
                  <th>{{$text->id}}</th>
                  <td>{{$text->form_name}}</td>
                  <td>{!!$text->value!!}</td>
                  <td>
                    <a class="btn btn-xs custom-xs btn-primary" href="{{route('texts.edit', $text->id)}}" data-toggle="tooltip" data-placement="bottom" title="Editar contrato"><i class="material-icons icon-xs">mode_edit</i></a>
                    {{-- {!! Form::open(['route' => ['texts.destroy', $text->id], 'method' => 'DELETE' ]) !!} --}}
                    {{--   <input type="hidden" name="id" value="{{$text->id}}"> --}}
                    {{--   <button type="submit" class="btn btn-xs custom-xs btn-danger" data-toggle="tooltip" data-placement="bottom" title="Deletar contrato"><i class="material-icons icon-xs">delete</i></button> --}}
                    {{-- {!! Form::close() !!} --}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </thead>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('modal')
  @include('text.create')
@endsection
