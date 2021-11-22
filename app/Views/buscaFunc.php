<h1 class="h1 text-center">Busque o código ou nome do funcionário</h1>
<h1 class="h2 text-center">Para Alterá-lo ou Deleta-lo</h1>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <h4> Busca Por Código </h4>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form method="POST" class="form">
                    <div>
                        <label for="codFunc" class="form-label mt-4">Digite o Código do funcionário:</label>
                        <input type="text" name="codFunc" id="codFunc" class="form-control">
                    </div>

                    <div class="col-12 mt-3 mb-5">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4> Busca Por Nome </h4>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form method="POST" class="form">
                    <div>
                        <label for="nomeFunc" class="form-label mt-4">Digite o nome do funcionário:</label>
                        <input type="text" name="nomeFuncBusca" id="nomeFunc" class="form-control">
                    </div>

                    <div class="col-12 mt-3 mb-5">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$request = service('request');
$codFunc = isset($funcionario->codFun)?$funcionario->codFun:0;
$nomeFunc = isset($funcionario->nomeFun)?$funcionario->nomeFun:'';
$foneFunc = isset($funcionario->foneFun)?$funcionario->foneFun:'';

if ($codFunc) {
?>

<h1 class="h1 text-center mt-5">Funcionário Encontrado</h1>

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
    <button type="submit" class="btn btn-danger mt-2">Deletar</button>
</form>
<?php
}

$nomeFuncBusca = isset($nomeFuncBusca)?$nomeFuncBusca:'';

if ($nomeFuncBusca) {       
?>
<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php echo ($codFunc) ?>
            </td>
            <td>
                <?php echo ($nomeFuncBusca) ?>
            </td>
            <td>
                <?php echo ($foneFunc) ?>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="codFuncAlterar" value="<?php echo($codFunc); ?>">
                    <button type="submit" class="btn btn-danger">Alterar</button>
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="codFuncDeletar" value="<?php echo($codFunc); ?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

<?php
}
?>