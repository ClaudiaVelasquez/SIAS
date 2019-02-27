<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './Slim/vendor/autoload.php';
require './src/config/db.php';
require './Libs/PHPMailer/PHPMailerAutoload.php';

$app = new \Slim\App();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

// $app->add(function ($req, $res, $next) {
//     $response = $next($req, $res);
//     return $response
//             ->withHeader('Access-Control-Allow-Origin', '*')
//             ->withHeader('Access-Control-Allow-Headers', 'Access-Control-Allow-Headers', 'Origin, Accept, Accept-  Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version, X-Response-Time, X-PINGOTHER, X-CSRF-Token,Authorization')
//             ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
// });

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});



$app->get('/',  function(Request $request, Response $response) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];    
    include_once 'View/login.php';    
});

//-------------- Vista de paginas ------------------//

$app->get('/modulo-de-cobranzas-y-facturacion',  function(){  
    include_once 'View/modulo-de-cobranzas-y-facturacion.php';  
 });

$app->get('/pautas-e-indicaciones',  function(){  
   include_once 'View/pautas-e-indicaciones.php';  
});

$app->get('/proyectos-asignados',  function(){  
    include_once 'View/proyectos-asignados.php';  
 });

 $app->get('/agencias-asignadas',  function(){  
    include_once 'View/agencias-asignadas.php';  
 });

 $app->get('/detalle-de-visita',  function(){  
    include_once 'View/detalle-de-visita.php';  
 });

 $app->get('/modulo-administrador',  function(){  
    include_once 'View/modulo-administrador.php';  
 });

 $app->get('/mantenimiento-usuarios',  function(){  
    include_once 'View/mantenimiento-usuarios.php';  
});
   
 $app->get('/gestor-de-proyectos',  function(){  
    include_once 'View/gestor-de-proyectos.php';  
 });

 $app->get('/mantenimiento-entidades-establecimientos',  function(){  
    include_once 'View/mantenimiento-entidades-establecimientos.php';  
 });

 $app->get('/gestor-de-evaluaciones',  function(){  
    include_once 'View/gestor-de-evaluaciones.php';  
 });

//-------------------------------------------------//

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// -------------------Clases o Archivos de ruteo-------------------

require './src/config/ini.php';
require './src/routers/api-sias.php';


$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});

$app->run();
 
