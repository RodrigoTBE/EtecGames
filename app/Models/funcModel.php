<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncModel extends Model
{
    protected $table = 'funcionario_tb';
    protected $primaryKey = 'codFun';
    protected $allowedFields = ['codusu_FK','nomeFun','foneFun'];
    protected $returnType = 'object';
}
