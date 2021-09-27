<?php

namespace App\Controllers;

class UsuarioContr extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('cadUsuario');
        echo view('footer');
    }

    public function areaAdm()
    {
        echo view('header');
        echo view('areaAdm');
        echo view('footer');
    }

    public function inserirUsuario()
    {
        $data['msg'] = '';

        $request = service('request');

        if ($request->getMethod() === 'post') {
            $UsuarioModel = new \App\Models\UsuarioModel();

            $opcao = ['cost' => 8];

            $senhaCrip = password_hash($request->getPost('senhausu'), PASSWORD_BCRYPT, $opcao);

            $UsuarioModel->set('emailusu', $request->getPost('emailusu'));
            $UsuarioModel->set('senhausu', $senhaCrip);

            if ($UsuarioModel->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "As informações não foram cadastradas com sucesso";
            }
        }

        echo view('header');
        echo view('cadUsuario', $data);
        echo view('footer');
    }

    public function todosUsuarios()
    {
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find();
        $data['usuarios'] = $registros;

        $request = service('request');
        $codUsuDeletar = $request->getPost('codUsuDeletar');
        $codUsuAlterar = $request->getPost('codUsuAlterar');

        if ($codUsuDeletar) {
            $this->deletarUsuario($codUsuDeletar);
        }

        if ($codUsuAlterar) {
            return $this->alterarUsuario();
        }

        echo view('header');
        echo view('listaUsuario', $data);
        echo view('footer');
    }

    public function ListaCodUsu()
    {
        $request = service('request');
        $codUsuario = $request->getPost('codUsu');
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find($codUsuario);

        $data['usuario'] = $registros;

        echo view('header');
        echo view('listaCodUsu', $data);
        echo view('footer');
    }

    public function alterarUsuario()
    {
        $request = service('request');
        $codUsuAlterar = $request->getPost('codUsuAlterar');
        $emailUsu = $request->getPost('emailUsu');
        
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros=$UsuarioModel->find($codUsuAlterar);

        if ($request->getPost('emailUsu')) {
            $registros->emailusu = $emailUsu;
            $UsuarioModel->update($codUsuAlterar, $registros);

            return redirect()->to(base_url('UsuarioContr/todosUsuarios/'));
        }

        $data['usuario']=$registros;

        echo view('header');
        echo view('alterarFormUsu', $data);
        echo view('footer');
    }

    public function deletarUsuario($codUsuDeletar){
        if (is_null($codUsuDeletar)) {
            return redirect()->to(base_url('UsuarioContr/todosUsuarios'));
        }

        $UsuarioModel= new \App\Models\UsuarioModel();

        if ($UsuarioModel->delete($codUsuDeletar)) {
            return redirect()->to(base_url('UsuarioContr/todosUsuarios'));
        }else {
            return redirect()->to(base_url('UsuarioContr/todosUsuarios'));
        }

        return redirect()->to(base_url('UsuarioContr/todosUsuarios'));
    }
}
