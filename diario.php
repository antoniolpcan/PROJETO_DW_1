<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Diário de refeições</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="form_de_cadastro">
        <h2>Olá <b><?php echo htmlspecialchars($_SESSION["usuario"]); ?>! O que você comeu hoje?</h2>
        <form class="row g-3" action="infos.php" method="post">

            <div class="col-12">
                <label for="data" class="form-label">Data: </label>
                <input type="date" class="form-control" name="data" id="data">
            </div>
            <div class="col-12">
                <label for="cafemanha" class="form-label">Café da manhã: </label>
                <input type="text" class="form-control" name="cafemanha" id="cafemanha">
            </div>
            <div class="col-12">
                <label for="almoco" class="form-label">Almoço: </label>
                <input type="text" class="form-control" name="almoco" id="almoco">
            </div>
            <div class="col-12">
                <label for="cafe_tarde" class="form-label">Café da tarde: </label>
                <input type="text" class="form-control" name="cafe_tarde" id="cafe_tarde">
            </div>
            <div class="col-12">
                <label for="janta" class="form-label">Jantar: </label>
                <input type="text" class="form-control" name="janta" id="janta">
            </div>
            <div class="col-12">
                <label for="extras" class="form-label">Extras: </label>
                <input type="text" class="form-control" name="extras" id="extras">
            </div>

            <div class="submit_back">
                <div class="col-12">
                    <a href="logout.php" class="btn btn-secondary">Deslogar</a>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <div class="col-12">
                    <a href="visualizar.php" class="btn btn-primary">Visualizar registros</a>
                </div>
            </div>

        </form>
    </div>    
</body>
</html>