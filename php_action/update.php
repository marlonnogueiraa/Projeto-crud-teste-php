<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar-produto'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$preco = mysqli_escape_string($connect, $_POST['preco']);
	$imagem = $_FILES['imagem']['name'];
	$fornecedor = mysqli_escape_string($connect, $_POST['fornecedor']);
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE produtos SET nome_produto = '$nome', preco = '$preco', imagem = '$imagem', fornecedor = '$fornecedor',descricao_produto = '$descricao' WHERE id = '$id'";
	$diretorio = '../imagens/' ;

        //Criar a pasta de foto 
        //mkdir($diretorio, 0755);
	 
        $saber = move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem);
		move_uploaded_file($imagem, $dir); //Fazer upload do arquivo
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;


if(isset($_POST['btn-editar-fornecedor'])):
	$nome_fornecedor = mysqli_escape_string($connect, $_POST['nome']);
	$logotipo = $_FILES['logotipo']['name'];
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$url_fornecedor = mysqli_escape_string($connect, $_POST['url_fornecedor']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE fornecedor SET nome = '$nome', logotipo = '$logotipo', descricao = '$descricao', url_fornecedor = '$url_fornecedor' WHERE id = '$id'";
 $diretorio = '../fornecedor/' ;

        //Criar a pasta de foto 
        //mkdir($diretorio, 0755);
	 
      $saber = move_uploaded_file($_FILES['logotipo']['tmp_name'], $diretorio.$logotipo);
		move_uploaded_file($imagem, $dir); //Fazer upload do arquivo
		$aux = "O da imagem é: " .logotipo;
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;