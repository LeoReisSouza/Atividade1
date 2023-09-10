<?php
class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

$produto1 = new Produto("Peixe dourado", 29.99);
$produto2 = new Produto("Hamster", 49.99);
$produto3 = new Produto("Gato", 79.99);
$produto4 = new Produto("Cachorro", 99.99);

$catalogo = [$produto1, $produto2, $produto3, $produto4];

function exibirCatalogo($catalogo) {
    foreach ($catalogo as $produto) {
        echo "Produto: " . $produto->nome . ", Preço: R$" . number_format($produto->preco, 2) . "<br>";
    }
}

exibirCatalogo($catalogo);
?>
