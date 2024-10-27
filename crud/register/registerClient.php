<?php
if(isset($_POST['submit'])) {
    include_once('connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO register (nome, email) 
              VALUES ('$name','$email')";

    $result = mysqli_query($connection, $query);

    if($result) {
        header('Location: listagem.php');
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($connection);
    }
}
?>