<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title> Diário </title>
</head>
<body>
    <h3>Registros:</h3>
    <div class="d-grid gap-2 d-md-block">
    <?php
        session_start();

        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.php");
            exit;
        }

        $filename = "txts/diario.txt";

        if (file_exists($filename)) {
            $lines = file($filename);

            foreach($lines as $line)
            {
                echo htmlspecialchars($line).'<br>';
            }

        } else {
            echo "Cadastre informações no diário primeiro!";
        }

    ?>
        <br>
        <a href="diario.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>