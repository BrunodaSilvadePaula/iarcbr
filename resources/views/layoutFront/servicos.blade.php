<style>
.image-service:before{
  background-image: url("{{ asset('image') }}/{{$front['images'][2]->image}}");
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
          <li class=" rb-span-2">
            <h3>{!! $front['texts'][7]->value !!}</h3>
            <span class="rb-temp"><i class="fa fa-search" aria-hidden="true"></i></span>
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
          <li class=" rb-span-2">
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
