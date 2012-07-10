<?php
header("Content-type: text/xml");

function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    return curl_exec($ch);
    curl_close ($ch);
}

$url = $_GET["url"];

$data = curl($url);
//$data = file_get_contents($url);
echo $data;

?>