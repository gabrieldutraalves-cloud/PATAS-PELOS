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
$curso = $_POST['curso']; 
$conhecimento_previo_array = $_POST['conhecimento_previo'] ?? [];

if (!is_array($conhecimento_previo_array)) {
    $conhecimento_previo_array = [$conhecimento_previo_array];
}
$conhecimento_previo = implode(", ", $conhecimento_previo_array);
$observacoes = $_POST['observacoes'];

//Montar o comando SQL para inserir os dados
$sql = "INSERT INTO inscricao (nome, email, telefone, curso, conhecimento_previo, observacoes)
VALUES ('$nome', '$email', '$telefone', '$curso', '$conhecimento_previo', '$observacoes')";

//Executar o comando no banco no banco de dados e mostrar uma mensagem
if(mysqli_query($curso_ti, $sql)) {
    echo "<h3> Inscrição feita com sucesso!</h3>";
    echo "<a href='index.html'>Voltar</a>";
} else {
    echo "Erro ao fazer inscrição: " . mysqli__error($curso_ti);
}

//Fechar a conexão com o banco
mysqli_close($curso_ti)
?>