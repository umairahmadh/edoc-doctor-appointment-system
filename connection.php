<?php

    $database= new mysqli("localhost","edocdbuser","Abracadabra123!","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>