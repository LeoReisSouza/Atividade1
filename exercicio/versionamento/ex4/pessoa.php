<?php
class Pessoa {
    private $nome;
    private $idade;
    private $profissao;

    public function __construct($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    public function apresentar() {
        return "<h1>Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou {$this->profissao}.<h1>";
    }
}

$pessoa1 = new Pessoa("$nome", $idade, "$profissao");


echo $pessoa1->apresentar();
?>