<?php
require_once dirname(dirname(__FILE__)). '/core/database.php';
require_once dirname(dirname(__FILE__)). '/model/Modelo.php';

class Categoria implements Modelo {

    protected $id;
    protected $nombre;
    protected $slug;
    public function __construct($id = null , $nombre = null, $slug = null){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->slug = $slug;
    }
    
    public static function all()
    {
        $con = new Conexion();
        $sql = "SELECT DISTINCT(imagenes.idModelo), nombre ,slug, imagen, tipoModelo FROM categorias 
        JOIN imagenes on categorias.id = imagenes.idModelo 
        WHERE tipoModelo = 'categoria'
        GROUP BY imagenes.idModelo";
        $consulta = $con->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;
    }

    public function create()
    {
        $con = new Conexion();
        
        $sql = "INSERT INTO categorias(nombre) VALUES(?)";
        $insertar = $con->db->prepare($sql);
        $insertar->bindParam(1, $this->nombre);
        return $insertar->execute();
    }

    public  function update()
    {
        $con = new Conexion();
        $sql = "UPDATE categorias SET nombre='$this->nombre' WHERE id='$this->id'";
        $insertar = $con->db->prepare($sql);
        return $insertar->execute();
    }

    public function delete()
    {
        $con = new Conexion();

        $sql = "DELETE categoria  WHERE id='$this->id'";
        $insertar = $con->db->prepare($sql);
        return $insertar->execute();
    }

    public function show()
    {
        $con = new Conexion();
        $sql = "SELECT * FROM categorias WHERE slug= '$this->slug'";
        $consulta = $con->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetch(PDO::FETCH_ASSOC, );
        $imagenes = $this->imagenes();
        $objetoConsulta['imagenes'] = $imagenes;
        $objetoConsulta = (object) $objetoConsulta;
        return $objetoConsulta;
    }

    public function imagenes()
    {
        $con = new Conexion();
        $sql = "select imagen from imagenes  where tipoModelo = 'categoria' AND  idModelo = 
        ( SELECT id FROM categorias WHERE slug = '$this->slug') ";
        $consulta = $con->db->prepare($sql);
        $consulta->execute();
        $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objetoConsulta;

    }


}

?>
