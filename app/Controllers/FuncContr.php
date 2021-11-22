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

    public  function BuscaPrincipalFunc(){
        $request = service('request');
        $codFunc = $request->getPost('codFunc');
        $nomeFuncBusca = $request->getPost('nomeFuncBusca')?$request->getPost('nomeFuncBusca'):"";
        $FuncModel = new \App\Models\FuncModel();
        $registros = $FuncModel->find($codFunc);

        $data['funcionario'] = $registros;

        $codFuncAlterar = $request->getPost('codFuncAlterar');
        $codFuncDeletar = $request->getPost('codFuncDeletar');

        if ($codFunc) {
            $registros = $FuncModel->find($codFunc);
        }else if($nomeFuncBusca) {
            $registros = $FuncModel->like('nomeFun',$nomeFuncBusca)->find();
            var_dump($registros);
        }

        if ($codFuncDeletar) {
            $this->ExcluirFunc($codFuncDeletar);
        }

        if ($codFuncAlterar) {
            return $this->AlterarFunc();
        }

        echo view('header');
        echo view('buscaFunc', $data);
        echo view('footer');
    }

    public function ExcluirFunc($codFuncDeletar){
        if (is_null($codFuncDeletar)) {
            return redirect()->to(base_url('funcContr/BuscaPrincipalFunc'));
        }

        $FuncModel = new \App\Models\FuncModel();

        if ($FuncModel->delete($codFuncDeletar)) {
            return redirect()->to(base_url('funcContr/BuscaPrincipalFunc'));
        }else {
            return redirect()->to(base_url('funcContr/BuscaPrincipalFunc'));
        }

        return redirect()->to(base_url('funcContr/BuscaPrincipalFunc'));
    }

    public function AlterarFunc(){
        $request = service('request');
        $codFuncAlterar = $request->getPost('codFuncAlterar');
        $nomeFunc = $request->getPost('nomeFunc');
        $foneFunc = $request->getPost('foneFunc');
        
        $FuncModel = new \App\Models\FuncModel();
        $registros=$FuncModel->find($codFuncAlterar);

        if ($nomeFunc && $foneFunc) {
            $registros->nomeFun = $nomeFunc;
            $registros->foneFun = $foneFunc;
            $FuncModel->update($codFuncAlterar, $registros);

            return redirect()->to(base_url('FuncContr/BuscaPrincipalFunc/'));
        }

        $data['funcionario']=$registros;

        echo view('header');
        echo view('buscaFunc', $data);
        echo view('footer');
    }
}
?>