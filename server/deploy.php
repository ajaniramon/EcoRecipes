<?php
/**
 * Created by PhpStorm.
 * User: rmartinez
 * Date: 25/05/2016
 * Time: 16:19
 */

$url = "http://ec2-52-28-62-178.eu-central-1.compute.amazonaws.com:8080/job/Desplegar/build?token=desplegarProduccion";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

$result = curl_exec($ch);

if(!curl_errno($ch)) {
    $info = curl_getinfo($ch);
    if($info['http_code'] == 201){
        echo 1;
    }else{
        echo 0;
    }
    /*echo "TIME: " . $info["total_time"] . "<br>";
    echo "STATUS: " . $info["http_code"] . "";
    echo "<br><br>";*/
}

curl_close($ch);

echo $resultado;

?>