<h1 class="h1 text-center">Busque o código do funcionário</h1>
<h1 class="h2 text-center">Para Alterá-lo ou Deleta-lo</h1>

<form method="POST" class="form">
    <div>
        <label for="codFunc" class="form-label mt-4">Digite o Código do funcionário:</label>
        <input type="text" name="codFunc" id="codFunc" class="form-control">
    </div>

    <div class="col-12 mt-3 mb-5">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>

    <?php
$request = service('request');
$codFunc = isset($funcionario->codFun)?$funcionario->codFun:0;
$nomeFunc = isset($funcionario->nomeFun)?$funcionario->nomeFun:'';
$foneFunc = isset($funcionario->foneFun)?$funcionario->foneFun:'';

if ($codFunc) {
?>

    <h1 class="h1 text-center">Funcionário Encontrado</h1>

    <form method="POST">

        <div class="mb-3">
            <label for="codFuncAlterar" class="form-label">Código do funcionário</label>
            <input type="text" class="form-control" name="codFuncAlterar" id="codFuncAlterar" value="<?=$codFunc?>"
                readonly>
        </div>
        <div class="mb-3">
            <label for="nomeFunc" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeFunc" id="nomeFunc" value="<?=$nomeFunc?>"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="foneFunc" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="foneFunc" id="foneFunc" value="<?=$foneFunc?>" required>
        </div>


        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
    <form method="post">
        <input type="hidden" name="codFuncDeletar" value="<?=$codFunc?>">
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>

</form>

<?php
}
?>