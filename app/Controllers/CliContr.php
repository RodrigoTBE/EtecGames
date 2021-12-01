<?php

namespace App\Controllers;

class CliContr extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('cadCli');
        echo view('footer');
    }

    public function inserirCli()
    {
        $data['msg'] = '';
        $request = service('request');

        if ($request->getMethod() === 'post') {
            $CliModel = new \App\Models\CliModel();

            $CliModel->set('codusu_FK', $request->getPost('codUsu'));
            $CliModel->set('nomeCli', $request->getPost('nomeCli'));
            $CliModel->set('foneCli', $request->getPost('foneCli'));

            if ($CliModel->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "As informações não foram cadastradas com sucesso";
            }
        }
    }

    public function ListaCadCodCli()
    {
        $request = service('request');
        $data['usuario'] = "";

        if ($request->getPost('codUsuCli')) {
            $codUsuCli = $request->getPost('codUsuCli');
            $UsuarioModel = new \App\Models\UsuarioModel();
            $registros = $UsuarioModel->find($codUsuCli);
            $data['usuario'] = $registros;
        }

        if ($request->getPost('nomeCli') && $request->getPost('foneCli')) {
            $this->inserirCli();
        }

        echo view('header');
        echo view('cadCli', $data);
        echo view('footer');
    }
}
