<?php

class ContaBancaria {
    private $titular;
    private $numeroConta;
    private $saldo;


    public function __construct($titular, $numeroConta, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de $valor realizado com sucesso. Saldo atual: $this->saldo <br>";
        } else {
            echo "O valor do depósito deve ser maior que zero. <br>";
        }
    }


    public function sacar($valor) {
        if ($valor > 0) {
            if ($this->saldo >= $valor) {
                $this->saldo -= $valor;
                echo "Saque de $valor realizado com sucesso. Saldo atual: $this->saldo <br>";
            } else {
                echo "Saldo insuficiente para realizar o saque. <br>";
            }
        } else {
            echo "O valor do saque deve ser maior que zero. <br>";
        }
    }


    public function consultarSaldo() {
        echo "Saldo atual da conta de $this->titular: $this->saldo <br>";
    }
}

$conta = new ContaBancaria("João", "123456", 1000);

$conta->consultarSaldo();
$conta->depositar(500);
$conta->sacar(200);
$conta->sacar(1500);
$conta->depositar(300);
$conta->consultarSaldo();
?>