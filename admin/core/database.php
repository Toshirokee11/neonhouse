<?php

class Conexion{
    public $db;

 public function __construct()
    {
    $host = "localhost";
    $dbname = "ghxumdmy_neonledstore";
    $username = "root";
    $password = "";
    /*
    $host = "localhost";
    $dbname = "ghxumdmy_neonledstore";
    $username = "ghxumdmy_userbrayan";
    $password = ",V)-pnTOsXia";
    */
    try {
        $this->db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    } catch (PDOException $th) {
        echo "Error: ". $th->getMessage();
    }

    }
    public function CloseConexion()
    {
        $this->db = null;
    }
}


?>