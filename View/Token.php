
<?php

# data needs to be POSTed to the Play url as JSON.
# (some code from http://www.lornajane.net/posts/2011/posting-json-data-with-php-curl)
$data = array("username" => "20167858067", "password" => "cee8c5a93de87a307472496b67655f6e1a02751ef40e50bac6c84bfab9388bc1", "grant_type" => "password");
//$data = array("grant_type" => "client_credentials", "client_id" => "client", "client_secret" => "secret");
$data_string = json_encode($data);

$ch = curl_init("https://ose-gw1.efact.pe:443/api-efact-ose/oauth/token?grant_type=password&username=20167858067&password=cee8c5a93de87a307472496b67655f6e1a02751ef40e50bac6c84bfab9388bc1");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS,  $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Basic Y2xpZW50OnNlY3JldA==',
    'Content-Type: application/x-www-form-urlencoded',
    'grant_type=client_credentials&client_id=client&client_secret=secret'
    )
);


// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//execute post
$result = curl_exec($ch);

if(curl_errno($ch)){
    echo 'Request Error:' . curl_error($ch);
}


curl_close($ch);

echo json_encode($result);

//https://stackoverflow.com/questions/28858351/php-ssl-certificate-error-unable-to-get-local-issuer-certificate
//https://developer.mozilla.org/es/docs/Web/HTTP/Headers/Content-Type

