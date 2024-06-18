<?php
require_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM contatos WHERE id = $id";

    if ($mysqli->query($sql)===TRUE) {
        echo "Usuário excluido com sucesso.";
    } else {
        echo "Erro ao excluir usuário: " ;
    }

    $mysqli->close();
}

?>

<button onclick="window.location.href='exibir.php'">Voltar à lista</button>

