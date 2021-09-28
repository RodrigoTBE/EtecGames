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
        foreach ($fornecedores as $fornecedor) : ?>
            <tr>
                <td>
                    <?php echo ($fornecedor->codForn) ?>
                </td>
                <td>
                    <?php echo ($fornecedor->nomeForn) ?>
                </td>
                <td>
                    <?php echo ($fornecedor->emailForn) ?>
                </td>
                <td>
                    <?php echo ($fornecedor->foneForn) ?>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codFornAlterar" value="<?php echo($fornecedor->codForn); ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codFornDeletar" value="<?php echo($fornecedor->codForn); ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>