<form method="POST" class="form">
    <div>
        <label for="codUsuFunc" class="form-label mt-4">Digite o Código do seu Usuário:</label>
        <input type="number" name="codUsuFunc" id="codUsuFunc" class="form-control">
    </div>

    <div class="col-12 mt-3 mb-5">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
<?php

$request = service('request');
$codUsuForn = isset($request->codUsufunc)?$request->codUsufunc:0;

if ($codUsuForn) {
?>

    <h1 class="h1 text-center">Funcionário Encontrado</h1>

    <table class="table">

        <thead>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </thead>
        <tbody>

            <?php
            $codForn = isset($fornecedor->codForn) ? $fornecedor->codForn : "";
            $nomeForn = isset($fornecedor->nomeForn) ? $fornecedor->nomeForn : "";
            $emailForn = isset($fornecedor->emailForn) ? $fornecedor->emailForn : "";
            $foneForn = isset($fornecedor->foneForn) ? $fornecedor->foneForn : "";
            ?>

            <tr>
                <td>
                    <?php echo ($codForn) ?>
                </td>
                <td>
                    <?php echo ($nomeForn) ?>
                </td>
                <td>
                    <?php echo ($emailForn) ?>
                </td>
                <td>
                    <?php echo ($foneForn) ?>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codFornAlterar" value="<?php echo($codForn); ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codFornDeletar" value="<?php echo($codForn); ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>

            </tr>
        </tbody>
    </table>
<?php
}
?>
</form>