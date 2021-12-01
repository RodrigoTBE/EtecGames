<h1 class="h1 text-center">Para Cadastrar um Cliente, primeiro cadastre um usuário</h1>

<form method="POST" class="form">
    <div>
        <label for="codUsuCli" class="form-label mt-4">Digite o Código do Usuário:</label>
        <input type="text" name="codUsuCli" id="codUsuCli" class="form-control">
    </div>

    <div class="col-12 mt-3 mb-5">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>

    <?php
$request = service('request');
$codUsuCli = isset($usuario->codusu)?$usuario->codusu:0;
$emailUsu = isset($usuario->emailUsu)?$usuario->emailUsu:'';

if ($codUsuCli) {

?>
    <h1 class="h1 text-center">Cliente Encontrado</h1>

    <form method="POST">

        <div class="mb-3">
            <label for="codUsuCLi" class="form-label">Código do usuário</label>
            <input type="text" class="form-control" name="codUsu" id="codUsuCLi" value="<?=$codUsuCli?>" readonly>
        </div>
        <div class="mb-3">
            <label for="emailUsu" class="form-label">E-mail Usuário</label>
            <input type="text" class="form-control" name="emailusu" id="emailusu" value="<?=$emailUsu?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nomeCli" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeCli" id="nomeCli" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="foneCli" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="foneCli" id="foneCli" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</form>

<?php
}
?>