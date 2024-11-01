<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        //inicializando as variaveis 
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "admin123"){
            echo "Bem vindo, $username!";
        }
        else{
            echo "Login ou senha incorretos.";
            echo '<form action="login.php" method="post">';
            echo '<button type="submit">voltar</button>';
            echo '</form>';
        }
    }
    ?>
</body>
</html>