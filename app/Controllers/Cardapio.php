<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cardapio extends BaseController
{
    public function index()
    {
        return view('Cardapio');
    }
}
