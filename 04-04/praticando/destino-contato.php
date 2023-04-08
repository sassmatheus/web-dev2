<?php
require "header.php";
?>

<?php

$nome = $_POST['nome'] ?? [];
$email = $_POST['email'] ?? [];
$msg = $_POST['msg'] ?? [];

echo "Nome informado: $nome <br>";
echo "Email: $email <br>";
echo "Mensagem: $msg <br>";

$data_envio = $_POST['data_envio'];
echo 'Data: ' . date('d/m/Y - H:i:s', strtotime($data_envio));

$arquivo = 'arquivo';

if (!file_exists($arquivo)) {
    if (mkdir($arquivo, 0777)) {
    }
}

$caminho_arquivo = 'C:\xampp\htdocs\web-dev2\03-21\Praticando\arquivo';
$nome_arquivo = 'contato' . uniqid() . '.txt';
$conteudo_arquivo = "Contato via site:\n\nData: $data_envio\nNome: $nome\nEmail: $email\nMensagem: $msg";
file_put_contents($caminho_arquivo . '/' . $nome_arquivo, $conteudo_arquivo);
?>

<?php
require "footer.php";
?>