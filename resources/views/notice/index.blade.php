@extends('layouts.app')
@section('page', 'notice')
@section('content')
  <div class="container">
    <div class="row">
      @if(session('error'))
        <p class="bg-danger">{{session('error')}}</p>
      @endif
      <div class="col-lg-12">
        <button id="new-notice" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="bottom" title="Nova noticia"><i class="material-icons">add</i></button>
      </div>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Titulo</th>
              <th>sub Titulo</th>
              <th>Descrição resumida</th>
              <th>Descrição</th>
              <th></th>
            </tr>
            <tbody>
              @foreach($notices as $notice)
                <tr>
                  <th>{{$notice->id}}</th>
                  <td>{{$notice->title}}</td>
                  <td>{{$notice->sub_title}}</td>
                  <td>{!!$notice->description_short!!}</td>
                  <td>{!!$notice->description!!}</td>
                  <td>
                    <a class="btn btn-xs custom-xs btn-primary" href="{{route('notices.edit', $notice->id)}}" data-toggle="tooltip" data-placement="bottom" title="Editar contrato"><i class="material-icons icon-xs">mode_edit</i></a>
                    {!! Form::open(['route' => ['notices.destroy', $notice->id], 'method' => 'DELETE' ]) !!}
                      <input type="hidden" name="id" value="{{$notice->id}}">
                      <button type="submit" class="btn btn-xs custom-xs btn-danger" data-toggle="tooltip" data-placement="bottom" title="Deletar contrato"><i class="material-icons icon-xs">delete</i></button>
                    {!! Form::close() !!}
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
  @include('notice.create')
@endsection
