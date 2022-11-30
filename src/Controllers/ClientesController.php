<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Cliente;

class ClientesController{


    public function __construct(){
        $this->index();
    }

    public function index()
    {
        $cliente = new Cliente;


        $clientes = $cliente->all();

        new View("clienteList",["cliente" => $clientes]);
    }
}