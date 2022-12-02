<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Client;

class ClientController{


    public function __construct(){

        if (isset($_GET["action"]) && ($_GET["action"] == "create")) { 
                $this->create();
                return;
            }

                $this->index();

        }



    public function index()
    {
        $client = new Client;
        $clients = $client->all();
        new View("clientList",["client" => $clients]);
    }
    
    public function create(){
        new View("createClient");
    }

}

