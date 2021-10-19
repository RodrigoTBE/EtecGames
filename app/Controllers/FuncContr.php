<?php

namespace App\Controllers;

class FuncContr extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('cadFunc');
        echo view('footer');
    }

    public function inserirFunc(){
        $data['msg'] = '';
        $request = service('request');

        if ($request->getMethod() === 'post') {
            $FuncModel = new \App\Models\FuncModel();

            $FuncModel->set('codusu_FK', $request->getPost('codUsu'));
            $FuncModel->set('nomeFun', $request->getPost('nomeFunc'));
            $FuncModel->set('foneFun', $request->getPost('foneFunc'));

            if ($FuncModel->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "As informações não foram cadastradas com sucesso";
            }
        }
    }

    public function ListaCodFunc()
    {
        $request = service('request');
        $data['usuario'] = "";

        if ($request->getPost('codUsuFunc')) {  
        $codUsuFunc = $request->getPost('codUsuFunc');
        $UsuarioModel = new \App\Models\UsuarioModel();
        $registros = $UsuarioModel->find($codUsuFunc);
        $data['usuario'] = $registros;
        }

        if ($request->getPost('nomeFunc') && $request->getPost('foneFunc')) {
            $this->inserirFunc();
        }

        echo view('header');
        echo view('cadFunc', $data);
        echo view('footer');
    }
}
?>