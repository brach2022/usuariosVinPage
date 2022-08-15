<?php

include_once('./config/config.php');
include_once('./config/database.php');


/**
 * Clase que permite interactuar con la tabla de usuarios de la base de datos
 */
class usuario{

    public $conexion;
    private $table  = "usuarios";


    //Metodo que me conecta a la base de datos
    function __construct(){
        $db=new Database();
        $this->conexion=$db->connectToDatabase();
    }


    /**
     * Metodo que me permite guardar datos en la base de datos
     * recibe como parametro los datos del usuario menos el id
     * retorna tue o false si el registro fue almacenado
     */
    function save($params){

        $nombres=$params['nombres'];
        $apellidos=$params['apellidos'];
        $celular=$params['celular'];
        $edad=$params['edad'];
        $email=$params['email'];
        $ciudad=$params['ciudad'];
        $observaciones=$params['observaciones'];

        $insert="INSERT INTO " . $this->table . " VALUES(null,'$nombres','$apellidos',$celular,'$edad','$email','$ciudad','$observaciones')";

        echo $insert;
        return mysqli_query($this->conexion,$insert);
    
    }

    /**
     * Metodo que me permite consultar todos los usuarios de la base de datos
     * no recibe parametros pero retorna la lista de todos los usuarios
     * en un arreglo
     */
    function getALL(){
    
        $sql="SELECT * FROM " . $this->table ;
        $result = mysqli_query($this->conexion,$sql);
        $objs = mysqli_fetch_all($result);
        return $objs;

    }

    /**
     * metodo que me permite consultar un usuario de la base de datos
     * recibe  como parametro el id del usuario, me retorna los datos del 
     * usuario que esta en la base de datos 
     */
    function getOne($id){

        $sql="SELECT * FROM " . $this->table . " WHERE id =$id";
        $result = mysqli_query($this->conexion,$sql);
        $objs = mysqli_fetch_object($result);
        return $objs;

    }


    /**
     * metodo que me permite modificar un usuario en la base de datos 
     * recibe como parametro todos los datos del usuario los nuevos y los antiguos
     * y realiza modificación por el id
     */
    function update($params){
        
        $nombres=$params['nombres'];
        $apellidos=$params['apellidos'];
        $celular=$params['celular'];
        $edad=$params['edad'];
        $email=$params['email'];
        $ciudad=$params['ciudad'];
        $observaciones=$params['observaciones'];
        $id=$params['id'];

        $update="UPDATE " . $this->table . " SET nombres='$nombres',apellidos='$apellidos',celular='$celular',edad='$edad',email='$email',ciudad='$ciudad',observaciones='$observaciones' WHERE id=$id ";

        return mysqli_query($this->conexion,$update);
    }


    /**
     * metodo que me eliminar un usuario de la base de datos
     * recibe como parametro el id del usuario a eliminar y 
     * retorna tru o false si la acción se realizo correctamente
     */
    function delete($id){

        $delete="DELETE FROM " . $this->table . " WHERE id = $id";
        return mysqli_query($this->conexion,$delete);
    }

}
?>