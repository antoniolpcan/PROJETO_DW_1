<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }

    $filename = 'txts/diario.txt';

    if(!file_exists($filename)){
        $handle = fopen($filename, "w");
    } else {
        $handle = fopen($filename, "a");
    }
    fwrite($handle, "Diário refeições ".$_POST['data'].": \n");
    fwrite($handle, "- ".$_POST['cafemanha']."\n");
    fwrite($handle, "- ".$_POST['almoco']."\n");
    fwrite($handle, "- ".$_POST['cafe_tarde']."\n");
    fwrite($handle, "- ".$_POST['janta']."\n");
    fwrite($handle, "- ".$_POST['extras']."\n");
    fwrite($handle, "\n");
    fflush($handle);
    fclose($handle);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title> Diário </title>
</head>
<body>
    <div class="form_de_cadastro">
        <h3>Atualizado!</h3>
        <div class="d-grid gap-2 d-md-block">
            <a href="diario.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>
</html>