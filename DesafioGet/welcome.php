<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    if(isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        echo "bem vindo : $nome";
    }
    ?>
</body>
</html>
