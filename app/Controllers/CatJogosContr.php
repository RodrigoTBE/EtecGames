<?php

namespace App\Controllers;
use App\Models\CatJogosModel;
use CodeIgniter\HTTP\Request;

class CatJogosContr extends BaseController
{

    public function inserirCatJogo()
    {
        $data['msg'] = '';

        $request = service('request');

        if ($request->getMethod() === 'post') {
            $CatJogosModel = new \App\Models\CatJogosModel();

            $CatJogosModel->set('nomeCatjogo', $request->getPost('nomeCatjogo')?$request->getPost('nomeCatjogo'):"");

            if ($CatJogosModel->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "As informações não foram cadastradas com sucesso";
            }
        }

        echo view('header');
        echo view('cadCatJogo', $data);
        echo view('footer');
    }
}
