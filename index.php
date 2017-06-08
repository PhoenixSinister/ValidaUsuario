<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION["USR"]))
        {
        
        }
        ?>
        <form action="valida.php" method="post">
            <input type="text" name="nomusu">
            <input type="text" name="claveusu">
            <input type="submit" name="Iniciar Sesion">
        </form>
        <?php
        
        ?>
    </body>
</html>
