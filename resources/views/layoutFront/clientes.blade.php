<style>
  @if($front['images'][3]->color != '' and $front['images'][3]->color != null)
    .image-cliente:before{
      background-color: {{$front['images'][3]->color}}!important;
    }
  @else
    .image-cliente:before{
      background-image: url("{{ asset('image') }}/{{$front['images'][3]->image}}")!important;
    }
  @endif
</style>
<div id="clientes" class="mask content">
  <div class="image-cliente">
    <div class="container">
      <section>
        <h1>Clientes</h1>
      </section>
    </div>
  </div>
</div>
