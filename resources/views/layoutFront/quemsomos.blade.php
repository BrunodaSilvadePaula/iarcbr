<style>
  @if($front['images'][1]->color != '')
    #app{
      background-color: {{$front['images'][1]->color}}!important;
    }
  @else
    #app{
      background-image: url("{{ asset('image') }}/{{$front['images'][1]->image}}")!important;
    }
  @endif
</style>
<div id="app" class="content">
  @include('layoutFront.menu')
  <div class="container">
    <section>
      <span>{!! $front['texts'][1]->value !!}</span>
    </section>
  </div>
</div>

