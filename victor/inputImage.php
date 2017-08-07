<form enctype="multipart/form-data">
  <hr>
  <div class="form-group">
      <input type="text" name="ean" class="form-control metade" placeholder="EAN">
      <input type="text" name="ref" class="form-control metade" placeholder="Referência">
  </div>
  <div class="form-group">
      <button type="button" style="width:30%;margin-left:5%" name="cor1" class="btn btn-primary">Cor</button>
      <button type="button" name="tamanho1" style="width:30%;margin-left:5%" class="btn btn-primary">Tamanho</button>
  </div>

  <label for="">Selecionar Imagens (máx: 3)</label>
  <div class="form-group" style="width:100%;">
    <input id="file-0c" class="file" type="file" multiple data-min-file-count="3">
  </div>
  <div class="form-group">
      <input type="text" style="width:80%" name="video" class="form-control" placeholder="Link Vídeo">
  </div>

  <hr>
  <div class="form-group">
      <button type="button" style="float:left" name="cor1" class="btn btn-success">Add Variação</button>
      <button type="button" name="tamanho1" style="float:right" class="btn btn-danger">Excluir</button>
  </div>

</form>
