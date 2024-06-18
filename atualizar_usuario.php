<?php
require_once "connection.php";

if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['fone']) && isset($_POST['email']) && isset($_POST['texto'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $texto = $_POST['texto'];
    $sql = "UPDATE contatos SET nome = '$nome' , fone = '$fone' , email = '$email' , texto = '$texto' WHERE id = $id";

    if ($mysqli->query($sql)===TRUE) {
        echo "Usuário atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar usuário: " . $mysqli->error;
    }

    $mysqli->close();
}

?>

<button onclick="window.location.href='exibir.php'">Voltar à lista</button>

