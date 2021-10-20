<form method="POST" class="form">
    <div>
        <label for="codUsuFunc" class="form-label mt-4">Digite o Código do seu Usuário:</label>
        <input type="text" name="codUsuFunc" id="codUsuFunc" class="form-control">
    </div>

    <div class="col-12 mt-3 mb-5">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>

    <?php
$request = service('request');
$codUsuFunc = isset($usuario->codusu)?$usuario->codusu:0;
$emailUsu = isset($usuario->emailUsu)?$usuario->emailUsu:'';
?>

    <h1 class="h1 text-center">Funcionário Encontrado</h1>

    <form method="POST">

        <div class="mb-3">
            <label for="codUsuFunc" class="form-label">Código do seu usuário</label>
            <input type="text" class="form-control" name="codUsu" id="codUsuFunc" value="<?=$codUsuFunc?>" readonly>
        </div>
        <div class="mb-3">
            <label for="emailUsu" class="form-label">E-mail Usuário</label>
            <input type="text" class="form-control" name="emailusu" id="emailusu" value="<?=$emailUsu?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nomeFunc" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeFunc" id="nomeFunc" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="foneFunc" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="foneFunc" id="foneFunc">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</form>