<?php

$uri = ""; //<--FIND URI!
$ch = curl_init($uri);

$data = array("Author" => $Navn, "Title" => $Alder);
$data_string = json_encode($data);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type:application/json','Content-Length: '.strlen($data_string)))



?>