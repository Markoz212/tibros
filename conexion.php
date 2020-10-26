<?php
    function conexion(){
    $hostname="157.230.5.212";
    $username="tibros";
	$password="Tibros1*";
	$dbname="caso_1";
        if(!($con = mysqli_connect($hostname, $username, $password, $dbname)))   {
            echo "Error conectando al Servidor de BD";
            exit();
        }
        if(!mysqli_select_db($con, $dbname))   {
            echo "Error seleccionando BD";
            exit();
        }
        return $con;
    }
?>