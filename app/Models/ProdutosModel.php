<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produtos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
}
