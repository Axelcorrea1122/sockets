<?php
    require_once("config.php");
    $salida = array();
    exec("$file_name $host $port", $salida);
    $salida = implode("<br>", $salida);
    echo $salida;


    $f = fopen("Log_tranfer.txt", "wt");
    $salida = str_replace("<br>", "\n", $salida);
    fputs($f, $salida);
    fclose($f);
    
?>