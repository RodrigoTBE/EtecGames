<h1 class="h1 text-center mt-3 mb-3">Cadastro de Fornecedor</h1>

<form method="POST">
<div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nomeForn" id="nome" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Digite aqui o nome do fornecedor.</div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="emailForn" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca compartilhe sua senha para outros funcionários.</div>
    </div>

    <div class="mb-3">
        <label for="fone" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="foneForn" id="fone" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Digite aqui o nome do fornecedor.</div>
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>