<?php

namespace App\Models;

use App\Database;

class Client{

    private ?int $id;
    private string $client;
    private string $issue;
    private ?int $phone;
    private string $email;
    private ?string $dateTime;

    private $table = "appointments";
    private $database;

    public function __construct($id = null, $client = '', $issue = '', $phone = null, $email = '', $dateTime = null){
       
        $this->id = $id;
        $this->client = $client;
        $this->issue = $issue;
        $this->phone = $phone;
        $this->email = $email;
        $this->dateTime = $dateTime;

        if(!$this->database){
            $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $clientArray = $query->fetchAll();

        $clientList = [];

        foreach ($clientArray as $client){
            $clientItem = new Client($client["id"], $client["client"], $client["issue"], $client["phone"], $client["email"], $client["dateTime"]);

            array_push($clientList, $clientItem);
        }

        return $clientList;
    }

    public function getClient(){
        return $this->client;
    }

    public function getIssue(){
        return $this->issue;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getEmail(){
        return $this->email;
    }
    public function getDateTime(){
        return $this->dateTime;
    }

    public function getId(){
        return $this->id;
    }

    public function save(){
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`client`, `issue`) VALUES ('$this->client','$this->issue');");
    }

    public function findById($id){
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id`= {$id}");
        $result = $query->fetchAll();
        
        return new Client($result[0]["id"], $result[0]["client"], $result[0]["issue"], $result[0]["phone"], $result[0]["email"], $result[0]["dateTime"]);
    }
    
    public function destroy(){
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`. `id` = {$this->id}");
    }

}