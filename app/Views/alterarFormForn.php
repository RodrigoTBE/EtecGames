<form action="" method="POST">

    <div class="mb-3 col-1">
        <label class="form-label" for="codForn">Código:</label>
        <input class="form-control text-center" type="text" id="codForn" name="codFornAlterar" value="<?php echo ($fornecedor->codForn) ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nomeForn" id="nome" aria-describedby="emailHelp" value="<?php echo ($fornecedor->nomeForn) ?>">
        <div id="emailHelp" class="form-text">Digite aqui o nome do fornecedor.</div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="emailForn">E-mail</label>
        <input class="form-control" type="text" id="emailForn" name="emailForn" value="<?php echo ($fornecedor->emailForn) ?>">
    </div>
    <div class="mb-3">
        <label for="foneForn" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="foneForn" id="foneForn" aria-describedby="emailHelp" value="<?php echo ($fornecedor->foneForn) ?>">
        <div id="emailHelp" class="form-text">Digite aqui o nome do fornecedor.</div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
</form>