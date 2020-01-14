<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM produtos WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_action/create.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome_produto'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="preco" id="preco" value="<?php echo $dados['preco'];?>">
				<label for="nome">Preço</label>
			</div>
			<div class="input-field col s12">
				<div class="file-field input-field">
					<div>
        	<span> Imagem Anterior</span>
        </div>
        <div>
        <img src="imagens/<?php echo $dados['imagem'];?>">
    	</div>
      <div class="btn">
        <span>Imagem Produto</span>
        <input type="file" name="imagem" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="imagem" >
      </div>
    </div>
			</div>
			<div class="input-field col s12">
				<input type="text"  value="<?php echo $dados['fornecedor'];?>">
    <select id="fornecedor" name="fornecedor">
      <option value="" disabled selected>Selecione o fornecedor</option>
      <option value="horta">horta</option>
      <option value="barao">barao</option>
      <option value="jovens">jovens</option>
    </select>
    <label>Fornecedor</label>
  </div>

  <div class="input-field col s12">
    
          <textarea id="descricao" name="descricao" class="materialize-textarea" value="<?php echo $dados['descricao_produto'];?>"></textarea>
          <label for="descricao" class='active'>Descrição</label>
  </div>
			<div class="input-field col s12">

				
			</div>

			

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
