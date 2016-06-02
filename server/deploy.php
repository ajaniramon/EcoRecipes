<?php

include_once "autorizacion.php";
$url = "http://ec2-52-28-62-178.eu-central-1.compute.amazonaws.com:9090/job/Desplegar/build?token=desplegarProduccion";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

$result = curl_exec($ch);

if(!curl_errno($ch)) {
    $info = curl_getinfo($ch);
    if($info['http_code'] == 201){
        echo "Desplegando!";
    }else if($info['http_code'] == 403){
        echo "Fallo de autenticación... mira los permisos de Jenkins para + info.";
    }else{
        echo "Jenkins no quiere desplegar :(";
    }
    /*echo "TIME: " . $info["total_time"] . "<br>";
    echo "STATUS: " . $info["http_code"] . "";
    echo "<br><br>";*/
}

curl_close($ch);

echo $resultado;

?>