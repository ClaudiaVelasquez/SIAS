<?php

// if (isset($_POST['btnUpload']))
// {

//     $filename = $_FILES['file']['name'];
//     $filedata = $_FILES['file']['tmp_name'];
//     $filesize = $_FILES['file']['size']; 
    
//     $args['file'] = new CurlFile($filedata,'file/exgpd',$filename);

// $url = "https://ose-gw1.efact.pe:443/api-efact-ose/v1/document"; // e.g. http://localhost/myuploader/upload.php // request URL

// if ($filedata != '')
// {

//     echo "@$filedata <br>";

//     $headers = array(
//                     "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NDA1ODI3ODcsInVzZXJfbmFtZSI6IjIwMTY3ODU4MDY3IiwiYXV0aG9yaXRpZXMiOlsiUk9MRV9DTElFTlQiXSwianRpIjoiYmY5N2VjMjctNjFhMi00YTBjLWJhYmEtMzFmNzg5NzQzZmVkIiwiY2xpZW50X2lkIjoiY2xpZW50Iiwic2NvcGUiOlsicmVhZCIsIndyaXRlIl19.2BDq4G-UcBrRrpjdbgbAKVzfJWdM4HXaEYn3LGboLVE",
//                     "Content-Type: multipart/form-data"); // cURL headers for file uploading
    
//     //$postfields = array("file" => "@$filedata");
//     $ch = curl_init();
//     $options = array(
//         CURLOPT_URL => $url,
//         CURLOPT_HEADER => true,
//         CURLINFO_HEADER_OUT => true,
//         CURLOPT_POST => 1,
//         CURLOPT_HTTPHEADER => $headers,
//         CURLOPT_POSTFIELDS => $args['file'],
//         CURLOPT_INFILESIZE => $filesize,
//         CURLOPT_RETURNTRANSFER => true
//     ); // cURL options
//     curl_setopt_array($ch, $options);

//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//     curl_exec($ch);
//     if(!curl_errno($ch))
//     {
//         $info = curl_getinfo($ch);
//         echo $info['http_code'];
//         if ($info['http_code'] == 200)
//             $errmsg = "File uploaded successfully";
//     }
//     else
//     {
//         echo 'Request Error:' . curl_error($ch);
//         $errmsg = curl_error($ch);
//     }
//     curl_close($ch);
// }
// else
// {
//     $errmsg = "Please select the file";
// }
// }

//==================================================//


// if (isset($_POST['btnUpload']))
// {

//     $uploadDir = "/uploads/";
//     $RealTitleID = $_FILES['file']['name'];
//     $ch = curl_init("https://ose-gw1.efact.pe:443/api-efact-ose/v1/document"); 
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//         "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NTY4MTcyMzcsInVzZXJfbmFtZSI6IjIwMTY3ODU4MDY3IiwiYXV0aG9yaXRpZXMiOlsiUk9MRV9DTElFTlQiXSwianRpIjoiNzQxMjg5ZTItMDc2NS00YjMyLWFiNmYtNWY0M2QyYTE1ZWQ0IiwiY2xpZW50X2lkIjoiY2xpZW50Iiwic2NvcGUiOlsicmVhZCIsIndyaXRlIl19.RZUD8eppFRRdsTSl625Ied9F88dns8T3p_odVn23lt4",
//         'Content-Type: multipart/form-data'
//         )
//     );
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $args['file'] = new CurlFile($_FILES['file']['tmp_name'],'file/exgpd',$RealTitleID);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $args); 

//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
//     curl_exec($ch);
//     if(!curl_errno($ch))
//     {
//         $info = curl_getinfo($ch);
//         echo $info['http_code'];
//         if ($info['http_code'] == 200)
//             $errmsg = "File uploaded successfully";
//     }
//     else
//     {
//         echo 'Request Error:' . curl_error($ch);
//         $errmsg = curl_error($ch);
//     }
//     curl_close($ch);

// }

//==================================================//




    
if (isset($_POST['btnUpload']))
{
    $data = [];
    array_push($data, ["Nombre" => "Claudia", "Apellido" => "Velasquez"]);
    array_push($data, ["Nombre" => "Claudia", "Apellido" => "Velasquez"]);
    
    foreach($_FILES["file"]['tmp_name'] as $key => $tmp_name){            
                
            //echo $_FILES['file']['name'][$key] ."<br>";

            $uploadDir = "/uploads/";
            $RealTitleID = $_FILES['file']['name'][$key];
            $ch = curl_init("https://ose-gw1.efact.pe:443/api-efact-ose/v1/document"); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NTY4Mjg5NDgsInVzZXJfbmFtZSI6IjIwMTY3ODU4MDY3IiwiYXV0aG9yaXRpZXMiOlsiUk9MRV9DTElFTlQiXSwianRpIjoiNTg3MGQwNGItZTcyNC00ZmE0LTk2NjQtZDZkN2ZiOWNiMjFlIiwiY2xpZW50X2lkIjoiY2xpZW50Iiwic2NvcGUiOlsicmVhZCIsIndyaXRlIl19.W0p07DYZZ8JKWZjvVTjUShskB9r8cM7MO9pEJgB9ABo",
                'Content-Type: multipart/form-data'
                )
            );
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $args['file'] = new CurlFile($_FILES['file']['tmp_name'][$key],'file/exgpd',$RealTitleID);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $args); 

            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            
            curl_exec($ch);
            if(!curl_errno($ch))
            {
                $info = curl_getinfo($ch);
                
                echo "HTTP CODE: " . $info['http_code'] . " ------> " . $_FILES['file']['name'][$key] ."<br>";
                 

                if ($info['http_code'] == 200)
                    $errmsg = "File uploaded successfully";
            }
            else
            {
                echo 'Request Error:' . curl_error($ch);
                $errmsg = curl_error($ch);
            }
            curl_close($ch);
            
    }

    echo json_encode($data);
    
}

