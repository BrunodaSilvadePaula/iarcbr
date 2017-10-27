<style>
  @if($front['images'][6]->color != '' and $front['images'][6]->color != null)
    .image-contato:before{
      background-color: {{$front['images'][6]->color}}!important;
    }
  @else
    .image-contato:before{
      background-image: url("{{ asset('image') }}/{{$front['images'][6]->image}}")!important;
    }
  @endif
</style>
<div id="contato" class="mask content">
  <div class="image-contato">
    <div class="container">
      <section>
        <h1>Contato</h1>
        <div class="col-lg-3">
          <div class="info">
            <span>
              <i class="fa fa-phone" aria-hidden="true"></i>
              &nbsp;
              {{ $front['texts'][4]->value }}
            </span>
            <br/>
            <span>
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
              &nbsp;
              {{ $front['texts'][5]->value }}
            </span>
            <br/>
            <br/>
            <br/>
            <span>
              <i class="fa fa-home" aria-hidden="true"></i>
              &nbsp;
              {!! $front['texts'][6]->value !!}
            </span>
            @if(session('success'))
              <br/>
              <br/>
              <br/>
              <span>
                <i class="fa fa-check" aria-hidden="true"></i>
                &nbsp;
                {{ session('success') }}
              </span>
            @elseif(session('error'))
              <br/>
              <br/>
              <br/>
              <span style="color:red!important">
                <i class="fa fa-exclamation" aria-hidden="true"></i>
                &nbsp;
                {{ session('error') }}
              </span>
            @endif
          </div>
        </div>
        <div class="col-md-7">
          {!! Form::open(['route' => 'contato.store', 'method' => 'POST']) !!}
          <div class="form-group">
            <label for="email">Email *</label>
            <input id="email" class="form-control" type="email" name="email">
          </div>
          <div class="form-group">
            <label for="nome">Nome *</label>
            <input id="nome" class="form-control" type="text" name="nome">
          </div> 
          <div class="form-group">
            <label for="phone">Telefone *</label>
            <input id="phone" class="form-control" type="text" name="phone">
          </div>
          <div class="form-group">
            <label for="message">Assunto *</label>
            <textarea id="message" class="form-control" name="message" cols="30" rows="10"></textarea>
          </div>
          <button class="btn btn-default center-block">Enviar</button>
          {!! Form::close() !!}
        </div>
      </section>
    </div>
  </div>
</div>
