<?php

namespace App\Controllers;

use App\Models\Clientes;

class ClientesController{


    public function __construct(){
        $this-> index();
    }

    public function index()
    {
        $coder = new Clientes;

        

    }
}