<?php

declare(strict_types=1);

class venda
{
	private string $data;
	private string $produto;
	private float $valor;
	private int $quantidade;
	private float $valorTotal;


	public function __construct(
		string $data,
		string $produto,
		float $valor,
		int $quantidade,
		float $valorTotal)
	{
		$this->data = $data;
		$this->produto = $produto;
		$this->valor = $valor;
		$this->quantidade = $quantidade;
		$this->valorTotal = $valorTotal;
	}

	public function datadaCompra()
	{

		echo 'Data: '. $this->data;

	}
	

	public function nomedoproduto()
	{
		
		echo 'Produto: '.$this->produto;
	
	}
	

	public function preco()
	{

		echo 'preço: '.$this->valor;
		
	}


	public function quant()
	{

		echo 'quantidade: '.$this->quantidade;
	
	}


	public function resultadoVenda()
	{
		
		echo 'Total do produto é R$: '. $this->valorTotal = $this->valor * $this->quantidade;

	}
}

$cliente = new venda('11/08/2021', 'mouse pad', 5, 3, 61.50);

echo $cliente->datadaCompra(); // mostra a data
echo PHP_EOL;

echo $cliente->nomedoproduto(); // nome do produto
echo PHP_EOL;

echo $cliente->preco(); // preço do produto
echo PHP_EOL;

echo $cliente->quant(); // quantidade do produto
echo PHP_EOL;

$cliente->resultadoVenda(); //total do produto
echo PHP_EOL;