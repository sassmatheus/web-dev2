<?php 
    session_start();
    if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
        header("Location: inicio.php");
    }
    require 'header.php'
?>
<form method="POST" action="destino-entrar.php" class="form-signin">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>
      <label for="inputEmail" class="sr-only">Usuário:</label>
      <input type="email" id="user" class="form-control" name="user" required autofocus>
      <label for="inputPassword" class="sr-only">Senha:</label>
      <input type="password" id="pass" name="pass" class="form-control" required>
      <br>
      <button class="btn btn-primary btn-block" type="submit">Enviar</button>
      <button class="btn btn-warning btn-block" type="reset">Limpar</button>
</form>

<?php 
    require 'footer.php'
?>
