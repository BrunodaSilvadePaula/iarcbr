<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Branding Image -->
      {{-- <a class="navbar-brand" href="{{ url('/') }}"> --}}
        {{--   {{ config('app.name', 'Laravel') }} --}}
        {{-- </a> --}}
    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav border">
        &nbsp;
        <li>
          <a class="" href="{{ url('/') }}#topo">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            IARC BR
          </a>
        </li>
        <li><a class="" href="{{ url('/') }}#app">Quem Somos</a></li>
        <li><a class="" href="{{ url('/') }}#servicos">Serviços</a></li>
        <li><a class="" href="{{ url('/') }}#clientes">Clientes</a></li>
        @if(count($front['notices']) > 0)
          <li><a class="" href="{{ url('/') }}#noticias">Notícias</a></li>
        @endif
        <li><a class="" href="{{ url('/') }}#contato">Contato</a></li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        <li>
          <a href="{{ url('/') }}" title="Twitter">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="{{ url('/') }}" title="Facebook">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
