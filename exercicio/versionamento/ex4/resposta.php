<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!DOCTYPE html>
    <title>Resposta</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $nome = $_POST["nome"];
             $idade = $_POST["idade"];
             $profissao = $_POST["profissao"];
             $saldoBancario = $_POST["saldoBancario"];
 
             require_once 'pessoa.php';
 
             $pessoa = new Pessoa($nome, $idade, $profissao);
 
         }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $saldoBancario = $_POST["saldoBancario"];


            if ($saldoBancario < 0) {
                echo "<h3>Saldo negativo: $saldoBancario</h3>";
                echo "<p> Está precisando de dinheiro? confira esses cursos que te ajudarão.</p>";
                require_once 'curso.php';
                exibirCatalogoCursos($catalogoCursos);
                
            } else {
                echo "<h3>Saldo: $saldoBancario</h3>";
                echo "<p> Veja alguns curso que estão em oferta.</p>";
                require_once 'curso.php';
                exibirCatalogoCursos($catalogoCursos);
                echo "<br>__________<br>";

                require_once 'catalogo.php';
                exibirCatalogo($catalogo);
                echo "<br>";
            }

            echo '<a href="index.php" class="btn btn-danger">Voltar</a>';
        }
        ?>
    </div>
</body>
</html>