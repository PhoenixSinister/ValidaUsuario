<?php
class Conexion{
    var $objconn;
    
    /*Metodo de conexión*/
    var $dbusr="root";
    var $dbpwd="avaras08";
    var $dbhost="localhost";
    var $dbname="exportaciones";
    
    public function Conectar(){
         $this->objconn = new mysqli($this->dbhost,
                                      $this->dbusr,
                                      $this->dbpwd,
                                      $this->dbname);
         
       if ($this->objconn->connect_error) {
        return "Fallo al conectar a MySQL: (" . $this->objconn->connect_error. ") " . $this->objconn->connect_error;
     }
     return true;  
    }
    
}