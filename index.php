<?php 

	require_once("config.php");
	
	//CARREGA LISTA USUARIOS
	//$lista = Usuario::getList();
	//echo json_encode($lista);


	//CARREGA UM USUÁRIO
	//$maria = new Usuario();
	//$maria->loadbyId(3);
	//echo $maria;


	/* SELECT
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
	*/


	/* CRIANDO UM NOVE USUARIO
	$aluno = new Usuario("Davi", "3333");
	$aluno->insert();

	echo $aluno;
	*/

	$usuario = new Usuario();

	$usuario->loadbyId(7);

	$usuario->update("macaca", "8888");

	echo $usuario;

 ?>