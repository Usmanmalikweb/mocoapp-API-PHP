<?php
// Include for Making the Requests
include('library/Requests.php');
Requests::register_autoloader();
    
// MocoApp Authorization
$headers = array(
    'Authorization' => 'Token token={API_KEY}'
);

// MocoApp Domain and URL
// Projects = https://{DOMAIN}.mocoapp.com/api/v1/projects
// Invoices = https://{DOMAIN}.mocoapp.com/api/v1/invoices
// You can find the other URLs at https://github.com/hundertzehn/mocoapp-api-docs
$response = Requests::get('https://{DOMAIN}.mocoapp.com/api/v1/invoices', $headers);

// JSON Output in a variable
$data = json_encode($response);

// PRINT JSON
    /* 
    var_dump(json_encode($response, true)); 
    */
?>
