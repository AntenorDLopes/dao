<?php 

	require_once("config.php");

	/*$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);

	========================================================
	FAZER UPDATE NO GIT:
	git add --all
	git commit -m "Criamos a Classe Usuario"
	git push origin master
	========================================================

	*/

	/*==============================
		//CARREGA UM USUARIO//
	$usuario = new Usuario();
	$usuario->loadById(5);
	echo "$usuario";
	===============================*/

	/*==============================
	//CARREGA UMA LISTA USUARIO//
	$lista = Usuario::getList();

	echo json_encode($lista);
	===============================*/

	/*==============================
	//CARREGA UMA LISTA USUARIO PELO LOGIN//
	$search = Usuario::search("fe");
	echo json_encode($search);
	===============================*/

	//CARREGA UM USUARIO USANDO UM LOGIN E SENHA
	$usuario = new Usuario();
	$usuario->login("fer","doe");
	echo $usuario;


 ?>