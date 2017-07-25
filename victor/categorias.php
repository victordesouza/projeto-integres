<?php
require_once("cabecalho.php");
require_once("class/Categoria.php");

$categoria = new Categoria();

?>
<!-- <label for="cat">Selecione a Categoria:</label><br> -->
<span><h4>Selecione a Categoria:</h4></span>
<select name="cat" id="cat" class="form-control">
  <option value="0" hidden="">Categoria</option>
  <?php
    $resultado_cat = $categoria->listaCategoria();
    while($linha = mysqli_fetch_assoc($resultado_cat) ) {
      echo '<option value="'.$linha['ID'].'">'.$linha['NOME'].'</option>';
    }
  ?>
</select>

<select name="sub_cat1" id="sub_cat1" class="form-control">
  <option value="0" hidden="">Subcategoria 1</option>
</select>

<span style="display:none">Aguarde, carregando...</span>

<select name="sub_cat2" id="sub_cat2" class="form-control">
  <option value="0" hidden="">Subcategoria 2</option>
</select>

<script type="text/javascript">
$(function(){ // Sub categoria 1
  $('#cat').change(function(){
    if( $(this).val() ) {
      $('#sub_cat1').hide();
      $('.carregando').show();
      $.getJSON('sub_cat1.php?search=',{cat: $(this).val(), ajax: 'true'}, function(j){
        var options = '<option value="0" hidden="">Subcategoria1</option>';
        for (var i = 0; i < j.length; i++) {
          options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
        }
        $('#sub_cat1').html(options).show();
        $('.carregando').hide();
      });
    } else {
      $('#sub_cat1').html('<option value="0" hidden="">Subcategoria 1</option>');
    }
  });
});

$(function(){		// Sub categoria 2
  $('#sub_cat1').change(function(){
    if( $(this).val() ) {
      $('#sub_cat2').hide();
      $('.carregando').show();
      $.getJSON('sub_cat2.php?search=',{sub_cat1: $(this).val(), ajax: 'true'}, function(j){
        var options = '<option value="0" hidden="">Subcategoria2</option>';
        for (var i = 0; i < j.length; i++) {
          options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
        }
        $('#sub_cat2').html(options).show();
        $('.carregando').hide();
      });
    } else {
      $('#sub_cat2').html('<option value="0" hidden="">Subcategoria 2</option>');
    }
  });
});
</script>
