<?php
session_start();
require "header.php";
?>
<div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
</div>

<form method="POST" action="destino-contato.php" >
    <div class="row">
        <div class="col-md-6">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="col">
            <label for="email">Email: </label>
            <input type="email" class="form-control" name="email" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="msg">Mensagem: </label>
        <textarea id="msg" rows="4" cols="30" class="form-control" name="msg" required> </textarea>
    </div>
    <input type="hidden" name="data_envio" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d-m-Y - H:i:s');?>">

    <br>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>


</form>
<?php
require "footer.php";
?>