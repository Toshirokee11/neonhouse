<?php
require_once dirname(dirname(__FILE__)). '/core/database.php';

class Usuario{

    protected $id;
    protected $username;
    protected $password;   
    protected $user_level;
    protected $nombres;
    protected $telefono;

    protected $idgallery;
    protected $descripcion;
    protected $idcliente;
    protected $image;
    
    protected $identclientgallery;


    protected function SearchUsuario()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE username='$this->username'";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        if($consulta){

            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
            return $objetoConsulta;

        }
        

    }
    protected function listUser()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM users WHERE status= 1";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
       

    }

    protected function insertUser()
    {
        $ic = new Conexion();
        
        $sql = "INSERT INTO users(username,password,user_level,nombres,telefono) VALUES(?,?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->username);
        $insertar->bindParam(2, $this->password);
        $insertar->bindParam(3, $this->user_level);
        $insertar->bindParam(4, $this->nombres);
        $insertar->bindParam(5, $this->telefono);
        return $insertar->execute();
        
    }


    protected function UpdateUser()
    {
        $ic = new Conexion();
        $sql = "UPDATE users SET username='$this->username',password='$this->password',user_level='$this->user_level',nombres='$this->nombres',telefono='$this->telefono' WHERE id='$this->id'";
        $insertar = $ic->db->prepare($sql);
        return $insertar->execute();
    }

    protected function userdelete()
    {
        $ic = new Conexion();
        $sql = "UPDATE users SET status='0' WHERE id='$this->id'";
        $insertar = $ic->db->prepare($sql);
        return $insertar->execute();
    }//___________________________________________________________________________________

    protected function showuser()
    {
        $ic = new Conexion();
        $sql = "SELECT id, nombres FROM users WHERE user_level='2' AND status='1' ";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
    }

    protected function inserGallerys()
    {

        $ic = new Conexion();        
        $sql = "INSERT INTO galeria(descripcion,idcliente,image) VALUES(?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->descripcion);
        $insertar->bindParam(2, $this->idcliente);
        $insertar->bindParam(3, $this->image);
        return $insertar->execute();

        
    }

    protected function listviewgallery()
    {
        $ic = new Conexion();
        $sql = "SELECT * FROM galeria";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
       

    }
    protected function deleteYouGallery()
    {
        $ic = new Conexion();
        $sql = "DELETE FROM galeria WHERE id='$this->idgallery'";
        $insertar = $ic->db->prepare($sql);
        return $insertar->execute();
    }

    protected function galleryforclients()
    {
        $ic = new Conexion();
        $sql = "SELECT galeria.descripcion, galeria.image FROM galeria
        INNER JOIN users
        ON galeria.idcliente = users.id
        WHERE users.username = '$this->identclientgallery' AND  users.user_level =2";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        if($consulta->execute()){
            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $objetoConsulta;
        }
           

    }

    protected function galleryforAll()
    {
        $ic = new Conexion();
        $sql = "SELECT galeria.descripcion, galeria.image FROM galeria
        INNER JOIN users
        ON galeria.idcliente = users.id
        WHERE  users.user_level =3";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        if($consulta->execute()){
            $objetoConsulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $objetoConsulta;
        }
           

    }



}



?>
