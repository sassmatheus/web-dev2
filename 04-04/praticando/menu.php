<ul class="nav nav-pills">
    <li class="nav-item"><a href="inicio.php" class="nav-link active" aria-current="page">Início</a></li>
    <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="faqs.php" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
    <?php 
        $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
        if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
            echo "<li class='nav-item'><a href='perfil.php' class='nav-link'>Perfil</a></li>";
            echo "<li class='nav-item'><a href='sair.php' class='nav-link'>Sair</a></li>";
        } else{
            echo "<li class='nav-item'><a href='entrar.php' class='nav-link'>Entrar</a></li>";
        }
    ?>
    
</ul>