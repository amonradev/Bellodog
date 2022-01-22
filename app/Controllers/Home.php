<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{

    // public function __construct()
    // {
    //     $this->this_model = new HomeModel();
    // }

    public function index()
    {
        return view('Home');
    }
    public function verificaEstaAberto() {
        $this->load->model('HomeModel');
        
        $response = $this->this_model->getHorarioFuncionamento()->result();

        var_dump($response);

    }
}
