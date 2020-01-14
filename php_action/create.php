<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}
if(isset($_POST['btn-cadastrar-fornecedor'])):
	$nome_fornecedor = clear($_POST['nome']);
	$logotipo = $_FILES['logotipo']['name'];
	$descricao = clear($_POST['descricao']);
	$url_fornecedor = clear($_POST['url_fornecedor']);

$sql = "INSERT INTO fornecedor (nome, logotipo, descricao_fornecedor, url_fornecedor)VALUES('$nome_fornecedor','$logotipo', '$descricao', '$url_fornecedor')";

	 $diretorio = '../fornecedor/' ;

        //Criar a pasta de foto 
        //mkdir($diretorio, 0755);
	 
      $saber = move_uploaded_file($_FILES['logotipo']['tmp_name'], $diretorio.$logotipo);
		move_uploaded_file($imagem, $dir); //Fazer upload do arquivo
		$aux = "O da imagem é: " .logotipo;
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "$aux";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;


if(isset($_POST['btn-cadastrar-produto'])):
	$nome = clear($_POST['nome']);
	$preco = clear($_POST['preco']);
	$imagem = $_FILES['imagem']['name'];
	$fornecedor = clear($_POST['fornecedor']);
	$descricao = clear($_POST['descricao']);

	$sql1 = "INSERT INTO produtos (nome_produto, preco, imagem, fornecedor, descricao_produto) VALUES ('$nome', '$preco', '$imagem', '$fornecedor', '$descricao')";

	 $diretorio = '../imagens/' ;

        //Criar a pasta de foto 
        //mkdir($diretorio, 0755);
	 
        $saber = move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem);
		move_uploaded_file($imagem, $dir); //Fazer upload do arquivo

	if(mysqli_query($connect, $sql1)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso!!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;

