<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['usuario'] == 'antonio_candioto' and $_POST['senha'] == 'umasenha555'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["usuario"] = 'Antonio';
        header("location: diario.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>
 
 <!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="form_de_cadastro">
        <h2>Login</h2>
        <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="col-12">
                <label for="usuario" class="form-label">Usuário: </label>
                <input type="text" class="form-control" name="usuario" id="usuario">
            </div>

            <div class="col-12">
                <label for="senha" class="form-label">Senha: </label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>

        </form>
    </div>    
</body>
</html>