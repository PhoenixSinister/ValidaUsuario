<!DOCTYPE html>
<?php
    include 'Librerias.php';
    session_start();
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="<?=URL?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <body>
        <?php
        if(!isset($_SESSION["USR"]))
        {
        
        }
        ?>
        <form action="<?=URL?>Controlador/Valida.php" method="post">
            <div><label>Nombre</label> <input id="nomusu" type="text" name="nomusu"></div>
            <div><label>Clave</label> <input id="claveusu" type="text" name="claveusu"></div>
            <input id="enviar" type="button" value="Acceder">
            <div id="msjweb"></div>
        </form>
        <?php
        
            
        ?>
    </body>
    <script type="text/javascript" >
        $(document).ready(function(){
            
            $("#enviar").click(function(){
                
                if($("#nomusu").val()=="" || $("#claveusu").val()==""){
                    alert("Debe agregar un usuario y clave");
                }
                else{
                    $.ajax({url:"<?=URL?>Controlador/Valida.php"
                        , type:"post"
                        ,data:{'nomusu':$("#nomusu").val(),
                        'claveusu':$("#claveusu").val()}
                        ,success:function(resweb){
                            $('#msjweb').html(resweb);
                                }   
                    });//Cierre Ajax
                }

            });//Click Del Boton
        });//Ready Del Document
            
    </script>
</html>
