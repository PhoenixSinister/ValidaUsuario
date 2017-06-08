<?php


class Usuario {
    var $nomusuario;
    var $clave;
    var $nombre;
    var $idusuario;
    
    public function __construct($nomusuario, $clave) {
        $this->nomusuario = $nomusuario;
        $this->clave = $clave;
    }

    public function  VerificaAcceso(){
        $objCon=new Conexion();
        
        if ($objCon->Conectar())
            $db=$oConn->objConn;
        
        $clavemd5 = md5($this->clave);
        $SQL = "select * from acceso"
                ."WHERE nomusuario='$this->nomusuario' and pwdusuario='$clavemd5'";
        
        $resultado = $db->query($SQL);
        if($resultado->num_rows>=1)
        {
            $this->idusuario=0;
            $this->nombre="";
            return true;
    }
    else
        return false;          
    }
    
}
