<?php

	function validarUsuario(array $usuario)
{

	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){

		throw new Exception("Campos obrigatórios não foram preenchidos!");
	}

	return true;
}

$usuario = [

		'codigo' => 1,
		
		'nome' => '',

		'idade' => 57,
];


$status = false;

try {
	$status = validarUsuario($usuario);

}catch (Exception $e) {
	
	echo $e->getMessage().PHP_EOL;
	


}finally{

		echo "status da Operação: ". (int)$status.PHP_EOL; // cast

		die();
	}

echo "\n ... executando... \n".PHP_EOL;