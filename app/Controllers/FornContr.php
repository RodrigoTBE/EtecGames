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

    public function listaCodForn()
    {
        $request = service('request');
        $codForn = $request->getPost('codForn');
        $FornModel = new \App\Models\FornModel();
        $registros = $FornModel->find($codForn);

        $data['fornecedor'] = $registros;

        $codFornDeletar = $request->getPost('codFornDeletar');
        $codFornAlterar = $request->getPost('codFornAlterar');

        if ($codFornDeletar) {
            $this->deletarForn($codFornDeletar);
        }

        if ($codFornAlterar) {
            return $this->alterarForn();
        }

        echo view('header');
        echo view('listaCodForn', $data);
        echo view('footer');
    }

    public function alterarForn()
    {
        $request = service('request');
        $codFornAlterar = $request->getPost('codFornAlterar');
        $nomeForn = $request->getPost('nomeForn');
        $emailForn = $request->getPost('emailForn');
        $foneForn = $request->getPost('foneForn');

        $FornModel = new \App\Models\FornModel();
        $registros = $FornModel->find($codFornAlterar);

        if ($nomeForn && $emailForn && $foneForn) {
            $registros->nomeForn = $nomeForn;
            $registros->emailForn = $emailForn;
            $registros->foneForn = $foneForn;

            $FornModel->update($codFornAlterar, $registros);
            $FornModel->update($codFornAlterar, $registros);
            $FornModel->update($codFornAlterar, $registros);

            return redirect()->to(base_url('FornContr/todosForn/'));
        }

        $data['fornecedor'] = $registros;

        echo view('header');
        echo view('alterarFormForn', $data);
        echo view('footer');
    }

    public function deletarForn($codFornDeletar)
    {
        if (is_null($codFornDeletar)) {
            return redirect()->to(base_url('FornContr/todosForn'));
        }

        $FornModel = new \App\Models\FornModel();

        if ($FornModel->delete($codFornDeletar)) {
            return redirect()->to(base_url('FornContr/todosForn'));
        } else {
            return redirect()->to(base_url('FornContr/todosForn'));
        }

        return redirect()->to(base_url('FornContr/todosForn'));
    }
}
