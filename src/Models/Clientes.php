<?php

namespace App\Models;

use App\Database;

class Cliente{

    private ?int $id;
    private ?string $cliente;
    private ?string $motivo;
    private ?int $teléfono;
    private ?string $email;
    private ?int $fecha;

    private $table = "consultorio";
    private $database;

    public function __construct($id = null, $cliente = '', $motivo = '', $teléfono = '', $email = '', $fecha = null){
       
        $this->id = $id;
        $this->cliente = $cliente;
        $this->motivo = $motivo;
        $this->teléfono = $teléfono;
        $this->email = $email;
        $this->fecha = $fecha;

        if(!$this->database){
            $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $clienteArray = $query->fetchAll();

        $clienteList = [];

        foreach ($clienteArray as $cliente){
            $clienteItem = new Cliente($cliente["id"], $cliente["cliente"], $cliente["motivo"], $cliente["teléfono"], $cliente["email"], $cliente["fecha"]);

            array_push($clienteList, $clienteItem);
        }

        return $clienteList;
    }
    
}