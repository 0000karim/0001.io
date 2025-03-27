<?php
// Dados do formulário
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$birthdate = htmlspecialchars($_POST['birthdate']);
$blood_type = htmlspecialchars($_POST['blood_type']);
$address = htmlspecialchars($_POST['address']);

// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doadores";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inserir dados no banco de dados
$sql = "INSERT INTO doadores (name, email, phone, birthdate, blood_type, address)
VALUES ('$name', '$email', '$phone', '$birthdate', '$blood_type', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
