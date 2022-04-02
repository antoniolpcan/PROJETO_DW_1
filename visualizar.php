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
    
        
    <div class="d-grid gap-2 d-md-block">
            
        <div class="form_de_cadastro">
        <h3>Registros:</h3>
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
    </div>
</body>
</html>