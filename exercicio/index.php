<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!DOCTYPE html>
    <title>Formulário PHP</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Formulário</h1>

        <form method="POST" action="resposta.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade">
            </div>
            <div class="mb-3">
                <label for="profissao" class="form-label">Profissão:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Digite sua profissão">
            </div>
            <div class="mb-3">
            <input type="hidden" name="saldoBancario" value="<?php echo rand(-500, 1000); ?>"> 
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>