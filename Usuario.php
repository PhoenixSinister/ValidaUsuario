<?php


class Usuario {
    var $nomusu;
    var $claveusu;
    var $nombre;
    var $idusuario;
    
    public function __construct($nomusu="", $claveusu="") {
        $this->nomusu = $nomusu;
        $this->claveusu = $claveusu;
    }

    public function  VerificaAcceso(){
        $objCon=new Conexion();
        
        if ($objCon->Conectar())
            $db=$objCon->objconn;
        else
            return false;
        
        $clavemd5 = md5($this->claveusu);
        $SQL = "select * from acceso "
                ."WHERE nomusuario='$this->nomusu' and pwdusuario='$clavemd5'";
        
        $resultado = $db->query($SQL);
        //echo $SQL;
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
