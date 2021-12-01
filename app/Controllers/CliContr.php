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

    public  function BuscaPrincipalCli()
    {
        $request = service('request');
        $codCli = $request->getPost('codCli');
        $nomeCliBusca = $request->getPost('nomeCliBusca') ? $request->getPost('nomeCliBusca') : "";
        $CliModel = new \App\Models\CliModel();
        $registros = $CliModel->find($codCli);

        $data['cliente'] = $registros;

        $codCliAlterar = $request->getPost('codCliAlterar');
        $codCliDeletar = $request->getPost('codCliDeletar');

        if ($codCli) {
            $registros = $CliModel->find($codCli);
        } else if ($nomeCliBusca) {
            $registros = $CliModel->like('nomeCli', $nomeCliBusca)->find();
            var_dump($registros);
        }

        if ($codCliDeletar) {
            $this->ExcluirFunc($codCliDeletar);
        }

        if ($codCliAlterar) {
            return $this->AlterarFunc();
        }

        echo view('header');
        echo view('buscaCli', $data);
        echo view('footer');
    }

    public function ExcluirFunc($codCliDeletar)
    {
        if (is_null($codCliDeletar)) {
            return redirect()->to(base_url('CliContr/BuscaPrincipalCli'));
        }

        $CliModel = new \App\Models\CliModel();

        if ($CliModel->delete($codCliDeletar)) {
            return redirect()->to(base_url('CliContr/BuscaPrincipalCli'));
        } else {
            return redirect()->to(base_url('CliContr/BuscaPrincipalCli'));
        }

        return redirect()->to(base_url('CliContr/BuscaPrincipalCli'));
    }

    public function AlterarFunc()
    {
        $request = service('request');
        $codCliAlterar = $request->getPost('codCliAlterar');
        $nomeCli = $request->getPost('nomeCli');
        $foneCli = $request->getPost('foneCli');

        $CliModel = new \App\Models\CliModel();
        $registros = $CliModel->find($codCliAlterar);

        if ($nomeCli && $foneCli) {
            $registros->nomeCli = $nomeCli;
            $registros->foneCli = $foneCli;
            $CliModel->update($codCliAlterar, $registros);

            return redirect()->to(base_url('CliContr/BuscaPrincipalCli'));
        }

        $data['clientes'] = $registros;

        echo view('header');
        echo view('buscaCli', $data);
        echo view('footer');
    }
}
