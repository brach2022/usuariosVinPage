<?php
/**
 * esta clase nos permite hacer una conexion con la base de datos
 * Recibe los parametros de conección como son 
 * Servidor
 * nombre de la base de datos
 * usuario
 * Password
 * Retorna la conección a la base de datos
 */
class Database{

    //parametros de conección 
    public $host='localhost';//servidor
    public $db='usuarios';//Base de datos
    public $user='root';//usuario de phpMyadmin
    public $pass='';// contraseña de phpMyadmin
    public $conexion;

    //contructor que realiza la conección una ves se instansea la clase
    function __construct(){
        $this->conexion = $this->connectToDatabase(); /* Asignamos la funcion de conexion */
        return $this->conexion; /* Me activa la conexion */
    }


    //Realiza la conexión a la base de datos tomando los parametos de conección
    //una vez creada la conexión la retorna de lo contrario retorna lo el error 
    function connectToDatabase(){
        $conexion= mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if(mysqli_connect_error()){ /* Si hay un error que me lo muestre */
            echo "Tenemos un error de conexion " . mysqli_connect_error();
        }
        return $conexion;
    }
}

?>