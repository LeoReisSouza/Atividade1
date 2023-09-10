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
                echo "<h4>Cursos:</h4>
                    - WebDesign https://www.fiap.com.br/.
                <br> - Design UI UX https://www.fiap.com.br/.
                <br> - Dev Mobile https://www.fiap.com.br/.
                <br>
                <br>";
            } else {
                echo "<h3>Saldo: $saldoBancario</h3>";
                echo "<p> Veja alguns curso que estão em oferta.</p>";
                echo "<h4>Cursos:</h4>
                    - WebDesign https://www.fiap.com.br/.
                <br> - Design UI UX https://www.fiap.com.br/.
                <br> - Dev Mobile https://www.fiap.com.br/.
                <br>";
                echo "<h4>Produtos com desaconto:</h4>
                         - Produto A R$ 75.
                        <br> - Produto B R$ 90.
                        <br> - Produto C R$ 65.
                        <br>
                        <br>";
            }

            echo '<a href="ex1.php" class="btn btn-danger">Voltar</a>';
        }
        ?>
    </div>
</body>
</html>