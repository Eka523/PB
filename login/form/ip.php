<?php
$alamat    = $_SERVER['REMOTE_ADDR'];
$inpoh     = json_decode(file_get_contents("http://ip-api.com/json/".$alamat.""));
$negro      = $inpoh->countryCode;
$nama_negro = $inpoh->country;
$city = $inpoh->city;
$zipCode = $inpoh->zip;
$user_agent = $inpoh->user_agent;
$os_name = $inpoh->os_name;
$kode_negro = strtolower($negro);	

?>