<?php
if(isset($_POST['submit'])) {
    include_once('connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];

    // Proteção contra SQL Injection
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);

    $query = "INSERT INTO register (nome, email) 
              VALUES ('$name','$email')";

    $result = mysqli_query($connection, $query);

    if($result) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($connection);
    }
}