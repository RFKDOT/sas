<?php

error_reporting(-1);

$usr = "demo";
$pww = "89e495e7941cf9e40e6980d14a16bf023ccd4c91"; //demo
$dir = "/tmp/sas_secure_dir/";

if(($_GET['usr'] === $usr) && (sha1($_GET['pww']) === $pww)){

        $tareas = array("NULL", "ApacheRestart", "PageSpeedRemoveCache");

        $acc = arrayzator($_GET['acc'], $tareas);

        if($acc==="NULL"){

                $ret = "Error #2 (Tarea inexistente)";

        }else{

                fopen($dir.$acc,"w");

                $ret = "Tarea (".$acc.") planificada correctamente.";

        }

}else{
        $ret = "Error #1 (Credenciales incorrectas)";
}

echo $ret;


function arrayzator($elem, $array)
{
    $dv = array_search($elem, $array);
    ((!$dv)or(!$elem)) ? $dv=0 : '' ;

    return $array[$dv];
}
?>
