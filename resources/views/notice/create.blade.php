<div id="createNoticia" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cadastro de Noticia</h4>
      </div>
      {!! Form::open(['route' => 'notices.store', 'method' => 'POST', 'class' => 'js-submit-pessoa', 'data-js-submit' => route('notices.store'), 'enctype' => 'multipart/form-data']) !!}
      <div class="modal-body">
        <div class="form-group">
          <label for="titulo">Titulo</label>
          <input id="titulo" class="form-control" type="text" name="titulo">
        </div>
        <div class="form-group">
          <label for="sub_title">Sub titulo</label>
          <input id="sub_title" class="form-control" type="text" name="sub_title">
        </div>
        <div class="form-group">
          <label for="description_short">Breve descrição</label>
          <textarea id="description_short" class="form-control" name="description_short" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="description">Descrição</label>
          <textarea id="description" class="form-control" name="description" cols="30" rows="10"></textarea>
        </div>
       <div class="form-group">
          <label for="image">Imagem</label>
          <input id="image" class="form-control" type="file" name="image">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success pull-right">Salvar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
