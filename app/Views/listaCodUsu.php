<form method="POST" class="form">
    <div>
        <label for="codUsu" class="form-label mt-4">Digite o Código do Usuário:</label>
        <input type="number" name="codUsu" id="codUsu" class="form-control">
    </div>

    <div class="col-12 mt-3 mb-5">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>

    <h1 class="h1 text-center">Usuário Encontrado</h1>

    <table class="table">

        <thead>
            <th>Código</th>
            <th>E-mail</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </thead>
        <tbody>

            <?php
            $codusu = isset($usuario->codusu) ? $usuario->codusu : "";
            $emailusu = isset($usuario->emailUsu) ? $usuario->emailUsu : "";
            ?>

            <tr>
                <td>
                    <?php echo ($codusu) ?>
                </td>
                <td>
                    <?php echo ($emailusu) ?>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codUsuAlterar" value="<?php echo($codusu); ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codUsuDeletar" value="<?php echo($codusu); ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>

            </tr>
        </tbody>
    </table>
</form>