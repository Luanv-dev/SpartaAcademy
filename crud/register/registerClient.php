<?php
if(isset($_POST['submit'])) {
    include_once('connection.php');

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $CPF = $_POST['CPF'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    $query = "INSERT INTO cadastro (nome, data_nascimento, CPF, telefone, celular, email) 
              VALUES ('$nome', '$data_nascimento', '$CPF', '$telefone', '$celular', '$email')";

    $result = mysqli_query($connection, $query);

    if($result) {
        header('Location: listagem.php');
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($connection);
    }
}
?>