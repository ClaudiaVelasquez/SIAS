<?php


    
if (isset($_POST['btnUpload']))
{
    $data = [];
    //array_push($data, ["Nombre" => "Claudia", "Apellido" => "Velasquez"]);

    $token = $_POST['token'];
    
    foreach($_FILES["file"]['tmp_name'] as $key => $tmp_name){            
                
            //echo $_FILES['file']['name'][$key] ."<br>";

            $uploadDir = "/uploads/";
            $RealTitleID = $_FILES['file']['name'][$key];
            $ch = curl_init("https://ose-gw1.efact.pe:443/api-efact-ose/v1/document"); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer " . $token,
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
                
                //echo "HTTP CODE: " . $info['http_code'] . " ------> " . $_FILES['file']['name'][$key] ."<br>";
                array_push($data, ["http_code" => $info['http_code'], "NombreArchivo" => $_FILES['file']['name'][$key] ]); 

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

