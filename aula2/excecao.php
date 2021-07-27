<?php

	function validarUsuario(array $usuario)
{

	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){

		return false;
	}

	return true;
}

$usuario = [

		'codigo' => 1,
		
		'nome' => '',

		'idade' => 57,
];


$usuariovalido = validarUsuario($usuario);


if (!$usuariovalido){

	echo "Usuário Inválido!".PHP_EOL;

	return false;

}

echo "\n ... executando... \n".PHP_EOL;