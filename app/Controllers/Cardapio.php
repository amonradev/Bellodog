<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutosModel;

class Cardapio extends BaseController
{
    public function index()
    {
        $produtosModel = new ProdutosModel();

        return view('Cardapio', [
            'produtos' => $produtosModel->findAll()
        ]);
    }
}
