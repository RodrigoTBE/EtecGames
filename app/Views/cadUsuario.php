<h1 class="h1 text-center mt-3 mb-3">Cadastro de Usuário</h1>

<form method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="emailusu" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca compartilhe sua senha para outros funcionários.</div>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senhausu" id="senha">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>