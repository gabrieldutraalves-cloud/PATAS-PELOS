<?php
// Configuração do Banco de Dados
$servidor = "localhost";
$usuario = "root";
$senha_bd = "";
$banco = "patas_e_pelos";

// Criar a conexão
$patas_e_pelos = mysqli_connect ($servidor, $usuario, $senha_bd, $banco);

// Verificar se a conexão deu certo
if (!$patas_e_pelos) {
    die("Erro de conexão: " . mysqli_connect_error());
}

//Pegar os dados que vieram do html
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Montar o comando SQL para inserir os dados
$sql = "INSERT INTO clientes (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";

mysqli_query($patas_e_pelos, $sql);

//Fechar a conexão com o banco
mysqli_close($patas_e_pelos)
?>