<?php

require_once "connection.php";
$nome = $_POST ['nome'];
$fone = $_POST ['fone'];
$email = $_POST ['email'];
$texto = $_POST ['texto'];
$sql = "INSERT INTO contatos (nome, fone, email, texto) VALUE ('$nome','$fone','$email','$texto')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cadastro</title>

</head>
<body>


    <div class="div"; style="background-color: #f8d86e; height: 120px; width: 300px; padding: 20px;  display: flax; align-items: center; justify-content: center; margin: auto; margin-top: 15%;border-radius: 20px;">
    <?php

        if ($mysqli->query($sql)===TRUE) {
             echo "<p class='confirme'; style='font-size: 22px; color: black; text-align: center; margin-top: 20px;'>Contato adicionado com sucesso!</p>";
        } else {
         echo "Erro ao adicionar contato: " . $mysqli->error;
        }

        $mysqli->close();

    ?>

    <div class="bt" style="margin-left: 33%; margin-right: 33%; margin-top: 15px; justify-content: center; align-items: center; display: flax;">

    <button class="bt-voltar"; style="background-color: #992a1b; height: 30px; border: none; padding: 4px; width: 100px; font-size: 1rem; font-weight: bold; border-radius: 4px; justify-content: center; align-items: center; display: flax; margin: auto;
    cursor: pointer;"><a href="index.html" style="color: white; text-decoration: none;">VOLTAR</a></button>

    </div>
    </div>
    
</body>
</html>