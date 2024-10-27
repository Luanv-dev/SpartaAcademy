<?php
if(isset($_POST['submit'])) {
    include_once('../../crud/connection/connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO register (name, email) 
              VALUES ('$name','$email')";

    $result = mysqli_query($connection, $query);

    if($result) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($connection);
    }
}
?>