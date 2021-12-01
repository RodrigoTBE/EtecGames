<h1 class="h1 text-center">Busque o código ou nome do cliente</h1>
<h1 class="h2 text-center">Para Alterá-lo ou Deleta-lo</h1>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h4> Busca Por Código </h4>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form method="POST" class="form">
                    <div>
                        <label for="codCli" class="form-label mt-4">Digite o Código do cliente:</label>
                        <input type="text" name="codCli" id="codCli" class="form-control">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4> Busca Por Nome </h4>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form method="POST" class="form">
                    <div>
                        <label for="nomeCli" class="form-label mt-4">Digite o nome do cliente:</label>
                        <input type="text" name="nomeCliBusca" id="nomeCli" class="form-control">
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
$codCli = isset($cliente->CodCli) ? $cliente->CodCli : 0;
$nomeCli = isset($cliente->nomeCli) ? $cliente->nomeCli : '';
$foneCli = isset($cliente->foneCli) ? $cliente->foneCli : '';

if ($codCli) {
?>

    <h1 class="h1 text-center mt-5">Cliente Encontrado</h1>

    <form method="POST">

        <div class="mb-3">
            <label for="codCliAlterar" class="form-label">Código do Cliente</label>
            <input type="text" class="form-control" name="codCliAlterar" id="codCliAlterar" value="<?= $codCli ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nomeCli" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeCli" id="nomeCli" value="<?= $nomeCli ?>" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="foneCli" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="foneCli" id="foneCli" value="<?= $foneCli ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>

    <form method="post">
        <input type="hidden" name="codCliDeletar" value="<?= $codCli ?>">
        <button type="submit" class="btn btn-danger mt-2">Deletar</button>
    </form>
<?php
}

$nomeCliBusca = isset($nomeCliBusca) ? $nomeCliBusca : '';

if ($nomeCliBusca) {
?>
    <h1 class="h1 text-center mt-5">Cliente Encontrado</h1>

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
                    <?php echo ($codCli) ?>
                </td>
                <td>
                    <?php echo ($nomeCliBusca) ?>
                </td>
                <td>
                    <?php echo ($foneCli) ?>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codCliAlterar" value="<?php echo ($codCli); ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codCliDeletar" value="<?php echo ($codCli); ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

<?php
}
?>