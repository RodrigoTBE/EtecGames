<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Área Administrativa</title>
</head>

<body>

    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Etec Game</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo base_url('../UsuarioContr/areaAdm')?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Usuário
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo base_url('../UsuarioContr/inserirUsuario')?>">Cadastro</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('../UsuarioContr/todosUsuarios')?>">Pesquisar Todos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('../UsuarioContr/listaCodUsu')?>">Pesquisar por Código</a></li>
                                    <li><a class="dropdown-item" href="#">Alterar/Deletar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Funcionário
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Cadastro</a></li>
                                    <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                                    <li><a class="dropdown-item" href="#">Alterar/Deletar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Fornecedor
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo base_url('../FornContr/inserirForn')?>">Cadastro</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('../FornContr/todosForn')?>">Pesquisar Todos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('../FornContr/listaCodForn')?>">Pesquisar por Código</a></li>
                                    <li><a class="dropdown-item" href="#">Alterar/Deletar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jogos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Cadastro</a></li>
                                    <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                                    <li><a class="dropdown-item" href="#">Alterar/Deletar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
