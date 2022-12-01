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
}