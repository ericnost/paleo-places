<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require '/home/matinel2/php/HTTP/Request2.php';


$request_url = 'http://api.neotomadb.org/v1/data/sites?loc=' . $_GET['loc'];


$request = new HTTP_Request2($request_url, HTTP_Request2::METHOD_GET);

try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
       print $response->getBody();
        }
       

    	    	
     else {
        die('Unexpected HTTP status: ' . $response->getStatus() . ' ' .
             $response->getReasonPhrase());
    }
} catch (HTTP_Request2_Exception $e) {
    die('Error: ' . $e->getMessage());
}




?>