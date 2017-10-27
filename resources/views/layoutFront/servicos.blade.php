<style>
  @if($front['images'][2]->color != '' and $front['images'][2]->color != null)
    .image-service:before{
      background-color: {{$front['images'][2]->color}}!important;
    }
  @else
    .image-service:before{
      background-image: url("{{ asset('image') }}/{{$front['images'][2]->image}}")!important;
    }
  @endif
  .rb-span-2 h3{
    color: #000;
    font-weight: 300!important;
  }
</style>
<div id="servicos" class="mask content parallax">
  <div class="image-service bgParallax parallax" data-speed="15">
    <div class="container">
      <section>
        <h1>Nossos Serviços</h1>
      </section>
      <div class="main">
        <ul id="rb-grid" class="rb-grid clearfix">
          @if(($front['images'][7]->color != '') and ($front['images'][7]->color != null))
            <li class=" rb-span-2" style="background-color: {{$front['images'][7]->color}}!important;">
          @else
            <li class=" rb-span-2" style="background-image: url({{ asset('image') }}/{{$front['images'][7]->image}})!important;">
          @endif
            <h3>{!! $front['texts'][7]->value !!}</h3>
            {{-- <span class="rb-temp"><i class="fa fa-search" aria-hidden="true"></i></span> --}}
            <div class="rb-overlay">
              <span class="rb-close">close</span>
              <div class="rb-week">
                <div>
                  <span class="rb-city">Serviço 1</span>
                  <span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                  {{-- <span>21°C</span> --}}
                </div>
                <div class="control-text">
                  <p>{!! $front['texts'][2]->value !!}</p>
                </div>
              </div>
            </div>
          </li>
          @if(($front['images'][8]->color != '') and ($front['images'][8]->color != null))
            <li class="rb-span-2" style="background-color: {{$front['images'][8]->color}}!important;">
          @else
            <li class="rb-span-2" style="background-image: url({{ asset('image') }}/{{$front['images'][8]->image}})!important;">
          @endif
          <h3>{!! $front['texts'][8]->value !!}</h3>
            {{-- <span class="rb-temp">21°C</span> --}}
            <div class="rb-overlay">
              <span class="rb-close">close</span>
              <div class="rb-week">
                <div>
                  <span class="rb-city">Serviço 2</span>
                  {{-- <span class="icon-clima-1"></span> --}}
                  {{-- <span>21°C</span> --}}
                </div>
                <div class="control-text">
                  <p>{!! $front['texts'][3]->value !!}</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
