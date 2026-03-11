<?php 

    if(isset($_POST["nome"]) && isset($_POST["senha"])){
        $usuario = $_POST["nome"];
        $senha = $_POST["senha"];

        if($usuario == "admin" && $senha == "123" ){
            echo "Login realizado com sucesso";
        }else{
            echo "Usuario ou senha incorreto";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label for="nome">Usuario</label>
            <input type="text" name="nome" placeholder="Digite seu usuario">
        </div>
         <form action="index.php" method="POST">
        <div>
            <label for="nome">Senha</label>
            <input type="text" name="nome" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
    </form>
</body>
</html>