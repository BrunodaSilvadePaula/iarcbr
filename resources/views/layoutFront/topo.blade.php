<style>
.image-topo:before{
  background-image: url("{{ asset('image') }}/{{$front['images'][5]->image}}");
}
</style>
<div id="topo" class="mask content header-paralax parallax">
  <div class="image-topo bgParallax parallax" data-speed="15">
    <div class="container">
      <h1>
        <img class="center-block" src="{{ asset('image') }}/{{$front['images'][0]->image}}" title=""/>
      </h1>
      <section>
        <span>
          {!! $front['texts'][0]->value !!}
        </span>
      </section>
    </div>
  </div>
</div>
