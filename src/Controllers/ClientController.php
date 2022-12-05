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

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) { 
                
                $this->store($_POST);
                return;
            }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) { 

                $this->delete($_GET["id"]);
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

    public function store(array $request){
        $newClient = new Client(null, $request["Client"], $request["issue"], null);

        $newClient->save();

        $this->index();
    }

    public function delete ($id){
        $clientHelper = new Client();
        $client = $clientHelper->findById($id);
        $client->destroy();

        $this->index();
    }
}

