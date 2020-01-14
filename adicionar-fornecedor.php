<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Fornecedor </h3>
		<form action="php_action/create.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<div class="file-field input-field">
      <div class="btn">
        <span>Logotipo Fornecedor</span>
        <input type="file" name="logotipo" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="logotipo" >
      </div>
    </div>
			</div>
<div class="input-field col s12">
    
          <textarea id="descricao" name="descricao" class="materialize-textarea" ></textarea>
          <label for="descricao" class='active'>Descrição</label>
  </div>

			<div class="input-field col s12">
				<input type="text" name="url_fornecedor" id="url_fornecedor">
				<label for="url_fornecedor">URL do fornecedor</label>
			</div>

			<button type="submit" name="btn-cadastrar-fornecedor" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
