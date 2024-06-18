<?php
require_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = $id";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $fone = $row['fone'];
        $email = $row ['email'];
        $texto = $row['texto'];
    }else {
        echo "Usuário não encontrado.";
        exit;
    }

    $mysqli->close();

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <div class="container">
        <h2>Atualizar Usuário</h2>
        <form action="atualizar_usuario.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($name); ?>">
            <label for="fone">Fone:</label>
            <input type="text" id="fone" name="fone" value="<?php echo htmlspecialchars($fone); ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <label for="texto">Mensagem:</label>
            <input type="texto" id="texto" name="texto" value="<?php echo htmlspecialchars($texto); ?>">
            <button type="submit">Atualizar</button>
        </form>
        <button class="back-button" onclick="window.location.href='exibir.php'">Voltar à Lista</button>
    </div>
    
</body>
</html>
