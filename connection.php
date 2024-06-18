<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "restaurante_paladar";

    $mysqli = new mysqli($servername, $username, $password, $database);
    if ($mysqli ->connect_error) {
        die("Erro na conexäo: " . $mysqli->connect_error);
    }
?>