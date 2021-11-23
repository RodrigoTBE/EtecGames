<?php

namespace App\Models;

use CodeIgniter\Model;

class CliModel extends Model
{
    protected $table = 'cliente_tb';
    protected $primaryKey = 'CpfCli';
    protected $allowedFields = ['codusu_FK','nomeCli', 'foneCli'];
    protected $returnType = 'object';
}
