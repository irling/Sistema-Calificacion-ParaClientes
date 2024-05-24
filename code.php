<?php

function ConectarBD(){
    //$servidor ="localhost";
    //$usuario ="root";
    //$clave="";
    //$clave="root"; warpserver --
    //$bd="prueba";
    $cnx=mysqli_connect($servidor,$usuario,$clave,$bd);
    return $cnx;
}   


if(isset($_POST['send-botton']))
{
    $brands = $_POST['brands'];
    $comentarios = $_POST ['comentarios'];
    

    foreach($brands as $item)
    {
        // echo $item . "<br>";
       // $query = "INSERT INTO demo (calificacion, comentarios) VALUES ('$item', '$comentarios')";
        //$query_run = mysqli_query(ConectarBD(), $query);

        $query = "INSERT INTO cticcalificacion (calificacion, comentarios) VALUES ('$item', '$comentarios')";
        $query_run = mysqli_query(ConectarBD(), $query);
        
    }

    if($query_run)
    {
        header("Location: validacion.html");
    }
    else
    {
        header("Location: negacion.html");
    }
}


if (isset($_POST['send-botton'])){



}
?>
