<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM fornecedor WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3 posicao">
		<h3 class="light"> Editar Fornecedor </h3>
		<form action="php_action/create.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<div class="file-field input-field">
					<div>
        	<span> Imagem Anterior</span>
        </div>
        <div>
        <img src="fornecedor/<?php echo $dados['logotipo'];?>">
    	</div>
      <div class="btn">
        <span> Fornecedor</span>

        <input type="file" name="logotipo" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="logotipo" >
      </div>
    </div>
			</div>
<div class="input-field col s12">
    
     <textarea id="descricao" name="descricao" class="materialize-textarea" 
     value="<?php echo $dados['descricao_fornecedor'];?>"></textarea>
          <label for="descricao" class='active'>Descrição</label>
  </div>

			<div class="input-field col s12">
				<input type="text" name="url_fornecedor" id="url_fornecedor" value="<?php echo $dados['url_fornecedor'];?>">
				<label for="url_fornecedor">URL do fornecedor</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>
<style type="text/css">
	.posicao img{
		width: 30%;
    margin-left: auto;
    margin-right: auto;
    display: block;
	}
</style>
<?php
// Footer
include_once 'includes/footer.php';
?>
