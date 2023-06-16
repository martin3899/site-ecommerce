<?php

class connexionToDatabase extends PDO
{
    protected $db;

    public function __construct(){
        $this->connexion();
    }

    protected function connexion(){
        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'Martin3899', 'Actutennis38!');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function request($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}



