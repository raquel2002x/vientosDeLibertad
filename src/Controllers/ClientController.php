<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Client;

class ClientController{


    public function __construct(){
        $this->index();
    }

    public function index()
    {
        $client = new Client;


        $clients = $client->all();

        new View("clientList",["client" => $clients]);
    }
}