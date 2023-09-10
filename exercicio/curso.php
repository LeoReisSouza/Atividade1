<?php
class Curso {
    public $nome;
    public $link;

    public function __construct($nome, $link) {
        $this->nome = $nome;
        $this->link = $link;
    }
}

$curso1 = new Curso("Curso de PHP Básico", "https://www.youtube.com/curso_php_basico");
$curso2 = new Curso("Curso de Web Design", "https://www.youtube.com/curso_web_design");
$curso3 = new Curso("Curso de Python Avançado", "https://www.youtube.com/curso_python_avancado");

$catalogoCursos = [$curso1, $curso2, $curso3];

function exibirCatalogoCursos($catalogoCursos) {
    foreach ($catalogoCursos as $curso) {
        echo  $curso->nome ."Link do Curso: " . $curso->link . "<br>";
    }
}

?>
