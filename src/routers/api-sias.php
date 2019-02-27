<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;    
//require '../../Slim/vendor/autoload.php';
//$app =new Slim\App;  
//
 

$app->get('/api/encuesta/{id}', function (Request $request, Response $response) {
    $name = $request->getAttribute('id');    
    $response->getBody()->write("Hello, $name");
    return $response;
});


$app->get('/api-sias/boleta/tipoboleta',  function(Request $request, Response $response) { 
    
    // $NombreProducto = $request->getParam('NombreProducto');
    // $idTienda = $request->getParam('idTienda');
    
    $sql = "SELECT * FROM tipocomprobante";
     
    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
            
    } catch(PDOException $e){
         echo '{"error": {"text": '.$e->getMessage().'}';
    }
    
 });
 


 $app->get('/api-sias/boleta/estadocomprobante',  function(Request $request, Response $response) { 
    
    // $NombreProducto = $request->getParam('NombreProducto');
    // $idTienda = $request->getParam('idTienda');
    
    $sql = "SELECT * FROM EstadoComprobante WHERE EstadoComprobante_id in('C','A')";
     
    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
            
    } catch(PDOException $e){
         echo '{"error": {"text": '.$e->getMessage().'}';
    }
    
 });
 


 $app->get('/api-sias/boleta/tipocobro',  function(Request $request, Response $response) { 
    
    // $NombreProducto = $request->getParam('NombreProducto');
    // $idTienda = $request->getParam('idTienda');
    
    $sql = "SELECT * FROM TipoCobro where TipoCobro_id not in(4,5)";
     
    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
            
    } catch(PDOException $e){
         echo '{"error": {"text": '.$e->getMessage().'}';
    }
    
 });
 



 $app->get('/api-sias/socio/BusquedaCodigo/{id}',  function(Request $request, Response $response) { 
    
    //$Cliente_id = $request->getParam('Cliente_id');
    $Cliente_id = $request->getAttribute('id');    
    
    $sql="SELECT * FROM Cliente WHERE Cliente_ID = '$Cliente_id'";
     
    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
            
    } catch(PDOException $e){
         echo '{"error": {"text": '.$e->getMessage().'}';
    }
    
 });
 
 

 $app->get('/api-sias/concepto/BusquedaNombre/{nombre}',  function(Request $request, Response $response) { 
    
    // $NombreProducto = $request->getParam('NombreProducto');
    $nombre = $request->getAttribute('nombre');
    
    $sql="SELECT * FROM ConceptoCobro WHERE nomcobro like '%$nombre%'";
     
    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
            
    } catch(PDOException $e){
         echo '{"error": {"text": '.$e->getMessage().'}';
    }
    
 });


 $app->get('/api-sias/comprobante/UltimaBoleta',  function(Request $request, Response $response) { 
    
    //$Cliente_id = $request->getParam('Cliente_id');
    
    $sql="SELECT max(numbol) + 1 as numerocomp from boleta where tipo='T'";
     
    try{
        
         // Get DB Object
         $db = new db();
         // Connect
         $db = $db->connect();
         $stmt = $db->query($sql);
         $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
         
         if(count($resultado)>0){
             echo json_encode($resultado); 
         }else{
             echo json_encode("Objeto vacio"); 
         }
            
    } catch(PDOException $e){
         echo '{"error": {"text": '.$e->getMessage().'}';
    }
    
 });
 
 
