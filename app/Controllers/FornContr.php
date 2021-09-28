<?php

namespace App\Controllers;

class FornContr extends BaseController
{

public function inserirForn()
    {
        $data['msg'] = '';

        $request = service('request');

        if ($request->getMethod() === 'post') {
            $FornModel = new \App\Models\FornModel();

            $FornModel->set('nomeForn', $request->getPost('nomeForn'));
            $FornModel->set('emailForn', $request->getPost('emailForn'));
            $FornModel->set('foneForn', $request->getPost('foneForn'));

            if ($FornModel->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "As informações não foram cadastradas com sucesso";
            }
        }

        echo view('header');
        echo view('cadForn', $data);
        echo view('footer');
    }

    public function todosForn()
    {
        $FornModel = new \App\Models\FornModel();
        $registros = $FornModel->find();
        $data['fornecedores'] = $registros;

        $request = service('request');
        $codFornDeletar = $request->getPost('codFornDeletar');
        $codFornAlterar = $request->getPost('codFornAlterar');

        if ($codFornDeletar) {
            $this->deletarForn($codFornDeletar);
        }

        if ($codFornAlterar) {
            return $this->alterarForn();
        }

        echo view('header');
        echo view('listaForn', $data);
        echo view('footer');
    }

}
?>