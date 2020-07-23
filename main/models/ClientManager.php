<?php

class ClientManager
{
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection=$connection;
    }
    // we assume that client data are valid
    public function add(Client $client) {
        $req=$this->connection->prepare('INSERT INTO client(prenom, nom, mail, mot_passe, 
                                        date_naissance, adresse, ville) VALUES (?, ?, ?, PASSWORD(?), ?, ?)');
        $req->execute($this->get_client_data($client));
    }
    // to check if the user has an account
    public function is_client(String $email, String $password) {
        $req=$this->connection->prepare
        ('SELECT EXIST(SELECT 1 FROM client WHERE mail=? AND mot_passe=PASSWORD(?)) as exist');
        $req->execute(array($email, $password));
        $exist=($req->fetch())['exist'];
        return $exist;
    }

    public function email_exist(String $email) {
        $req=$this->connection->prepare
        ('SELECT EXIST(SELECT 1 FROM client WHERE mail=?) as exist');
        $req->execute(array($email));
        $exist=($req->fetch())['exist'];
        return $exist;
    }

    /* put data of the client we want to add in an array */
    private function get_client_data($client) {
        $client_data=[];
        $client_class=new ReflectionClass('Client');
        foreach ($client_class->getProperties() as $field) {
            $getter='get_'.$field->getName();
            if( !$field->isStatic() && method_exists($client, $getter) )
                $client_data[]=$client->$getter();
        }
        return $client_data;
    }
}