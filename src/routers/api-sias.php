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
    
    $sql = "SELECT * FROM EstadoComprobante WHERE EstadoComprobante_id in('C','P')";
     
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
    
    //$sql="SELECT max(numbol) + 1 as numerocomp from boleta where tipo='T'";
    $sql="SELECT max(numbol) + 1 as numerocomp from boleta where tipo='BE'";
     
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

 $app->get('/api-sias/comprobante/UltimaFactura',  function(Request $request, Response $response) { 
    
    
    $sql="SELECT max(numfac) + 1 as numerocomp from factura where tipo='E'";
     
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
 
 // Insertar Comprobante

 $app->post('/api-sias/comprobante/add', function(Request $request, Response $response){

    // $Comprobante_ID = $request->getParam('Comprobante_ID');
    $TipoComprobante_id = $request->getParam('cbotc');
    $Cliente_ID = $request->getParam('codigo');
    $fechcance = $request->getParam('fechcance');
    $igv = $request->getParam('totaligvac');
    $total = $request->getParam('totalgeneac');
    $valorCambio = $request->getParam('tcambio');

    $EstadoComprobante_ID = $request->getParam('cboec');
    $TipoCobro_id = $request->getParam('cbotcob');
    $Usuario = $request->getParam('Usuario');
    
    if($EstadoComprobante_ID=='C'){
        $sql = "INSERT INTO Comprobante (TipoComprobante_id, Cliente_ID, fechcance, igv , total, valorCambio, EstadoComprobante_ID, TipoCobro_id, Usuario) 
                VALUES ('$TipoComprobante_id', '$Cliente_ID', getDate() , '$igv' , '$total', '$valorCambio', '$EstadoComprobante_ID', '$TipoCobro_id', '$Usuario')";
    }else{
        $sql = "INSERT INTO Comprobante (TipoComprobante_id, Cliente_ID, igv , total, valorCambio, EstadoComprobante_ID, TipoCobro_id, Usuario) 
                VALUES ('$TipoComprobante_id', '$Cliente_ID', '$igv' , '$total', '$valorCambio', '$EstadoComprobante_ID', '$TipoCobro_id', '$Usuario')";
    }

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);

        if($stmt->execute())
        {

            $ucod=$db->lastInsertId();         
            echo '{ "Respuesta" : { "Id" : "' . $ucod .'" , "insert" : true } }';
            //echo json_encode(TRUE);
        }
    
    } catch(PDOException $e){
        echo '{"error": {"text":  ' . $e->getMessage() . '}';
        //echo '{ "Respuesta" : [{ "insert" : false }]}';
    }

});
 
 // Insertar Comprobante

 $app->post('/api-sias/detacomprobante/add', function(Request $request, Response $response){

    // $Comprobante_ID = $request->getParam('Comprobante_ID');
    $Comprobante_ID = $request->getParam('Comprobante_ID');
    $ConceptoCobro_ID = $request->getParam('ConceptoCobro_ID');
    $cantidad = $request->getParam('cantidad');
    $importe = $request->getParam('importe');
    $observa = $request->getParam('observa');

    $sql = "INSERT INTO DetaComprobante (Comprobante_ID, ConceptoCobro_ID, cantidad, importe , observa) 
    VALUES ('$Comprobante_ID', '$ConceptoCobro_ID', '$cantidad', '$importe' , '$observa')";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);

        if($stmt->execute())
        {

            $ucod=$db->lastInsertId();         
            echo '{ "Respuesta" : [{ "Id" : "' . $ucod .'" , "insert" : true }]}';
            //echo json_encode(TRUE);
        }
    
    } catch(PDOException $e){
        echo '{"error": {"text":  ' . $e->getMessage() . '}';
        //echo '{ "Respuesta" : [{ "insert" : false }]}';
    }

});

 // Insertar boleta

 $app->post('/api-sias/boleta/add', function(Request $request, Response $response){

    $Comprobante_ID = $request->getParam('Comprobante_ID');
    $numbol = $request->getParam('numbol');
    $serie = $request->getParam('serie');
    //$tipo = $request->getParam('tipo');    

    $sql = "INSERT INTO boleta (Comprobante_ID, numbol, serie, tipo) 
    VALUES ('$Comprobante_ID', '$numbol', '$serie', 'BE')";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);

        if($stmt->execute())
        {

            //$ucod=$db->lastInsertId();         
            echo '{ "Respuesta" : [{ "Id" : "' . $Comprobante_ID .'" , "insert" : true }]}';
            //echo json_encode(TRUE);
        }
    
    } catch(PDOException $e){
        echo '{"error": {"text":  ' . $e->getMessage() . '}';
    }

});
 
 // Insertar factura

 $app->post('/api-sias/factura/add', function(Request $request, Response $response){

    $Comprobante_ID = $request->getParam('Comprobante_ID');
    $numfac = $request->getParam('numfac');
    $subTotal = $request->getParam('subTotal');
    $igv = $request->getParam('igv');
    //$tipo = $request->getParam('tipo');    

    $sql = "INSERT INTO factura (Comprobante_ID, numfac, subTotal, igv, Tipo, serie) 
    VALUES ('$Comprobante_ID', '$numfac', '$subTotal', '$igv', 'E', 1)";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);

        if($stmt->execute())
        {

            //$ucod=$db->lastInsertId();         
            echo '{ "Respuesta" : [{ "Id" : "' . $Comprobante_ID .'" , "insert" : true }]}';
            //echo json_encode(TRUE);
        }
    
    } catch(PDOException $e){
        echo '{"error": {"text":  ' . $e->getMessage() . '}';
    }

});


 // Consultar comprobante //

$app->get('/api-sias/comprobante/{codigo}',  function(Request $request, Response $response) { 
    
    $codigo = $request->getAttribute('codigo');    
    
    $sql="SELECT 
    case 
        when c.TipoComprobante_id=1 then 'BOLETA DE VENTA'
        when c.TipoComprobante_id=2 then 'FACTURA DE VENTA'
        when c.TipoComprobante_id=3 then 'NOTA DE CRÉDITO'	
    end as Comprobante,
    Serie=case 
                when c.TipoComprobante_id=1 then 
                    (select b.serie from Boleta  b 
                            where b.Comprobante_id=c.Comprobante_id)
                when c.TipoComprobante_id=2 then 
                    (select f.serie from factura  f 
                            where f.Comprobante_id=c.Comprobante_id)
                when c.TipoComprobante_id=3 then 
                    (select n.serie from NotaCredito  n 
                            where n.Comprobante_id=c.Comprobante_id)
              end,
    
    Numero=case 
                when c.TipoComprobante_id=1 then 
                    (select Convert(varchar(10),b.numbol) from Boleta  b 
                            where b.Comprobante_id=c.Comprobante_id)
                when c.TipoComprobante_id=2 then 
                    (select Convert(varchar(10),f.numfac) from factura  f 
                            where f.Comprobante_id=c.Comprobante_id)
                when c.TipoComprobante_id=3 then 
                    (select Convert(varchar(10),n.numnota) from NotaCredito  n 
                            where n.Comprobante_id=c.Comprobante_id)
              end
    , c.Cliente_ID as Codigo, cl.apellidoP + ' ' + cl.apellidoM + ' ' + cl.nombre as 
    Nombres, cat.nomcate ,tc.descrip as TCliente, '' as CodTDoc, '' as TDoc ,cl.nrodoc, cl.email,
    c.fechcomp, c.fechcance, c.Usuario, c.igv, c.total, c.valorCambio, concep.nomcobro, dc.* 
    from DetaComprobante dc, Comprobante c, Cliente cl, TipoCliente tc, Categoria cat, ConceptoCobro concep
    where c.Comprobante_ID=dc.Comprobante_ID and c.Cliente_ID=cl.Cliente_ID
    and tc.TipoCliente_ID=cl.TipoCliente_ID and cl.Categoria_ID=cat.Categoria_ID and concep.ConceptoCobro_ID=dc.ConceptoCobro_ID 
     and dc.Comprobante_id='$codigo'";
     

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
 
 
 
 // Consultar tipo de cambio //

$app->get('/api-sias/tipocambio',  function(Request $request, Response $response) { 
    
    //$codigo = $request->getAttribute('codigo');    
    
    $sql="SELECT * from TipoCambio";
     
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
 
