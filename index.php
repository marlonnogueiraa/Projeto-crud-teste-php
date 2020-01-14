<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2 dimensao">
		<h3 class="light"> Produtos </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Preço:</th>
					<th>Imagem:</th>
					<th>fornecedor:</th>
					<th>Descricao:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM produtos";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome_produto']; ?></td>
					<td><?php echo $dados['preco']; ?></td>
					<td><img src="imagens/<?php echo $dados['imagem']; ?>"></td>
					<td><?php echo $dados['fornecedor']; ?></td>
					<td><?php echo $dados['descricao_produto']; ?></td>
					<td><a href="editar-produto.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar-produto" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar-produto.php" class="btn">Adicionar Produto</a>
	</div>
</div>



<div class="row">
	<div class="col s12 m8 push-m2 dimensao">
		<h3 class="light"> Fornecedor </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome do fornecedor:</th>
					<th>Logotipo:</th>
					<th>descrição do fornecedor:</th>
					<th>url_fornecedor:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM fornecedor";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><img src="fornecedor/<?php echo $dados['logotipo']; ?>"></td>
					<td><?php echo $dados['descricao_fornecedor']; ?></td>
					<td><?php echo $dados['url_fornecedor']; ?></td>
					<td><a href="editar-fornecedor.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar-fornecedor" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar-fornecedor.php" class="btn">Adicionar Fornecedor</a>
	</div>
</div>

<style type="text/css">
	.dimensao img {
		width: 20%;
	}
</style>
<?php
// Footer
include_once 'includes/footer.php';
?>

