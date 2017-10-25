<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/climacons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css')}}" />
    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),    
      ]) !!};
    </script>
    <body id="front" data-spy="scroll" data-target="#navbar-example">
      @include('layoutFront.topo')
      @include('layoutFront.quemsomos')
      @include('layoutFront.servicos')
      @include('layoutFront.clientes')
      @include('layoutFront.resumoNoticias')
      @include('layoutFront.contato')
      @include('layoutFront.rodape')
      
      <!-- Scripts -->
      <script src="{{ asset('js/notice.custom.js') }}"></script>
      <script src="{{ asset('js/modernizr.custom.js') }}"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="{{ asset('js/jquery.fittext.js') }}"></script>
      <script src="{{ asset('js/boxgrid.js') }}"></script>
      <script src="{{ asset('js/front.js') }}"></script>
      <script>
        $(function() {
            Boxgrid.init();          
        });
      </script>
    </body>
  </head>
</html>
