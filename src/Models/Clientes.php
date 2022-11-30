<?php

namespace App\Models;

use App\Database;

class Clientes{

    public function __construct(){
        if(!$this->database){
            $this->database = new Database();
    }
}

}