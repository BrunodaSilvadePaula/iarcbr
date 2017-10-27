@if(count($front['notices']) > 0)
  <style>
    @if($front['images'][4]->color != '' and $front['images'][4]->color != null)
      .image-notice:before{
        background-color: {{$front['images'][4]->color}}!important;
      }
    @else
      .image-notice:before{
        background-image: url("{{ asset('image') }}/{{$front['images'][4]->image}}")!important;
      }
    @endif
  </style>
  <div id="noticias" class="mask content">
    <div class="image-notice">
      <div class="container">
        <section>
          <h1>Noticias</h1>
        </section>
        <div class="wrapper">
          @foreach($front['notices'] as $notice)
            <div class="col-lg-4 notice">
              <div class="info">
                <a href="{{ route('noticia.showNoticia', $notice->id) }}">
                  <article>
                    <header class="center-block">
                      <h3>{{ $notice->title }}</h3>
                      @if($notice->sub_title != "")
                        <h4 class="year">{{ $notice->sub_title }}</h4>
                      @endif
                    </header>
                    <p>
                    {!! $notice->description_short !!}
                    </p>
                  </article>
                </a>
              </div>
            </div>
          @endforeach
        </div>
        <div class="col-lg-12">
          <a href="{{ route('noticia.showAll') }}" class="btn btn-default ver-mais">Ver todas notícias</a>
        </div>
      </div>
    </div>
  </div>
@endif
