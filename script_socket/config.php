<?php

    if(!file_exists("socket_server.exe")){
        echo "No se encuentra el archivo socket_server.exe";
        exit();
    }

    /*CONFIGURACION DE HOST Y PUERTO PARA SERVER TCP*/
    $file_name = "socket_server.exe";
    $host = "192.168.0.42";
    $port = 13000;
?>