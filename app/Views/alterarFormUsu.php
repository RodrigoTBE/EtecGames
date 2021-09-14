<form action="" method="POST">

    <div class="mb-3 col-1">
        <label class="form-label" for="codUsu">Código:</label>
        <input class="form-control text-center" type="text" id="codUsu" name="codUsuAlterarF" value="<?php echo ($usuario->codusu) ?>" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label" for="emailUsu">E-mail:</label>
        <input class="form-control" type="text" id="emailUsu" name="emailUsu" value="<?php echo ($usuario->emailUsu) ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
</form>