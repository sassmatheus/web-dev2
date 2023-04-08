<?php 
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
        header("Location: entrar.php");
    }

    require 'header.php'
?>
<div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
</div>
<div>
    <p>Nome: Matheus Sass</p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <?php 
        if(isset($_COOKIE['cookie_teste'])){
            echo "<p>Você visitou essa página em " . date('d-m-Y - H:i:s') ." &#127850;&#127850;</p>";
        } else{
            echo "<p>Você NUNCA PASSOU por aqui.</p>";
            setcookie('cookie_teste', 'valor', time() + 30);
        }
    ?>
    
</div>

<?php 
    require 'footer.php'
?>