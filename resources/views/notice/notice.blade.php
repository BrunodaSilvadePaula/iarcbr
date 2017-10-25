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
    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),    
      ]) !!};
    </script>
    <body id="front" class="notice-body">
      @include('notice.menu')
      <div class="container">
        <section class="col-lg-3 col-md-3 col-xs-12 box specific-notice">
          <article>
            <h3>Ultimas Noticias</h3>
            <ul>
              @foreach($top_notice as $top)
                <a href="{{ route('noticia.showNoticia', $top->id) }}">
                  <li>{{ $top->title }}</li>
                </a>
              @endforeach
            </ul>
            <a href="{{ route('noticia.showAll') }}" class="btn btn-default">Ver mais</a>
          </article>
        </section>
        <section class="col-lg-9 col-md-9 col-xs-12 box specific-notice">
          <aside class="col-lg-12 col-md-12 col-xs-12">
            <article>
              <header>
                <h1>{{ $notice->title }}</h1>
                <h2>{{ $notice->sub_title }}</h2>
              </header>
              <p>{!! $notice->short_description !!}</p>
            </article>
          </aside>
          <aside class="col-lg-12 col-md-12 col-xs-12">
            <img style="max-width:100%;" src="{{ asset('image/') }}/{{ $notice->image }}" alt="">
          </aside>
          <aside>
            <article>
              <p>{!! $notice->description !!}</p>
            <article>
          </aside>
        </section>
      </div>
      @include('layoutFront.rodape')
      <!-- Scripts -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="{{ asset('js/front.js') }}"></script>
    </body>
  </head>
</html>
