<?php 

	require_once("config.php");

	$maria = new Usuario();

	$maria->loadbyId(3);

	echo $maria;
	/*

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	*/

 ?>