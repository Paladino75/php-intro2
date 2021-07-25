<?php

declare(strict_types=1);

class ContaBancaria
{
    private $banco;

    /**
     * @var string
     */
    private $nomeTitular = 'Yago de Araujo';

    /**
     * @var string
     */

    private $numerodaAgencia = '3232';

    /**
     * @var string
     */
    private $numerodaConta;

    /**
     * @var float
     */
    private $saldo;


    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numerodaAgencia,
        string $numerodaConta,
        float $saldo
    ){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numerodaAgencia = $numerodaAgencia;
        $this->numerodaConta = $numerodaConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() : string
    {
        return 'Seu saldo atual é: R$ '. $this->saldo;
    }
    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return 'Deposito de R$ ' . $valor.' realizado';
    }
    public function sacar(float $valor) : string
    {
        $this->saldo -=$valor;
        return 'Saque de R$ '. $valor. ' realizado!';
    }
}

$conta1 = new ContaBancaria(
        'Banco do Brasil',// banco
        'Yago de Araujo',// nomeTitular
        '3636',// numeroAgencia
        '57354-10',// numeroConta
        0 // saldo
);

var_dump($conta1);

$conta2 = new ContaBancaria(
        'Caixa Economica',// banco
        'Joana Silva',// nomeTitular
        '4324',// numeroAgencia
        '432345-10',// numeroConta
        300.00 // saldo
);

var_dump($conta2);
/*
echo $conta->obterSaldo(); // 0

echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo(); // 300

echo PHP_EOL;

echo $conta->sacar(150);

echo PHP_EOL;

echo $conta->ObterSaldo(); // 150

echo PHP_EOL;
*/