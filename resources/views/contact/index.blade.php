@extends('layouts.app')
@section('page', 'contact')
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
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Mensagem</th>
              <th></th>
            </tr>
            <tbody>
              @foreach($contacts as $contact)
                <tr>
                  <th>{{$contact->id}}</th>
                  <td>{{$contact->name}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->phone}}</td>
                  <td>{{$contact->message}}</td>
                  <td>
                    <a class="btn btn-xs custom-xs btn-primary" href="{{route('contacts.edit', $contact->id)}}" data-toggle="tooltip" data-placement="bottom" title="Editar contrato"><i class="material-icons icon-xs">mode_edit</i></a>
                    {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'DELETE' ]) !!}
                      <input type="hidden" name="id" value="{{$contact->id}}">
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
  @include('contact.create')
@endsection
