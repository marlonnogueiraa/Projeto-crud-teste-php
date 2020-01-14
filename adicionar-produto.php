<?php
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';


$sql = "SELECT * FROM fornecedor";
				$resultado = mysqli_query($connect, $sql);
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Produto </h3>
		<form action="php_action/create.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="preco" id="preco">
				<label for="nome">Preço</label>
			</div>
			<div class="input-field col s12">
				<div class="file-field input-field">
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
				
    <select id="fornecedor" name="fornecedor">
    	
      <option value="" disabled selected>Selecione o fornecedor</option>
      <?php 
                if(mysqli_num_rows($resultado) > 0){

				while($dados = mysqli_fetch_array($resultado)){
				 ?>
      <option value="<?php echo $dados['nome']; ?>" > 
 				<?php echo $dados['nome']; ?>
      	</option>
      	<?php } }?>
    </select>

    <label>Fornecedor</label>
  </div>

  <div class="input-field col s12">
    
          <textarea id="descricao" name="descricao" class="materialize-textarea" ></textarea>
          <label for="descricao" class='active'>Descrição</label>
  </div>
			<div class="input-field col s12">

				
			</div>

			

			<button type="submit" name="btn-cadastrar-produto" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>