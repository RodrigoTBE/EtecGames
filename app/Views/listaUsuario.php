<table class="table">

    <thead>
        <th>Código</th>
        <th>E-mail</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </thead>
    <tbody>
        <?php
        foreach ($usuarios as $usuario) : ?>
            <tr>
                <td>
                    <?php echo ($usuario->codusu) ?>
                </td>
                <td>
                    <?php echo ($usuario->emailUsu) ?>
                </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="codUsuAlterar" value="<?php echo($usuario->codusu); ?>">
                        <button type="submit" class="btn btn-danger">Alterar</button>
                    </form>
                </td>
                <td>
                    X
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>