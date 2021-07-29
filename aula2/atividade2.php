<?php

	function divisao(array $numeros)
	{

		if($numeros['num1'] == 0 || $numeros['num2'] == 0)

		{
		
		throw new Exception("algum dos número é igual a zero");
		
		}

		return true;
			
	}


	$numeros = [

		'num1' => 0,
		'num2' => 0

	];

	$status = false;
	
	try {

		$status = divisao($numeros);

	} catch (Exception $e) {

		echo $e->getMessage().PHP_EOL;
	}finally{

		echo "status da operação ".(int)$status.PHP_EOL;
	}