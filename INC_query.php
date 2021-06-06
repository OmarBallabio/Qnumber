<?php 
	
    // Serch string to bring best results
	$getquery = '"'. $query_nome.'" telefone whats "('.$query_ddd.')" "'.$query_cidade.'"';

	$query =urlencode("$getquery");

    // Works with almost any website
$host = "www.google.com.br/";
$request = "search?q=".$query;

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://" . $host . $request); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: close'));
    curl_setopt($ch, CURLOPT_TIMEOUT, 2); 
    $google_resp = curl_exec($ch); 
    curl_close($ch);
   
?>
