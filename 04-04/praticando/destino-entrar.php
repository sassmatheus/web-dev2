<?php 
    session_start();
    $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

    if($user == "admin@admin" && $pass == "admin"){
        $_SESSION["user"] = $user;
        header("Location: inicio.php");
    } else{
        unset($_SESSION["user"]);
    }

    require 'header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
        <div class="p-4 mb-4 rounded" style="background-color: pink">
            <p class="text-danger bold">Falha ao efetuar autenticação.</p>
            <p class="text-danger">O usuário ou a senha estão incorretos.</p>
            <p class="text-danger">Verifique as informações e tente novamente.</p>
        </div>
    </div>
</div>

