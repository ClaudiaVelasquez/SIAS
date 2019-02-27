<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include_once './View/Plantillas/cabecera.php'; ?>

    <!-- Script / Estilos CSS / Recursos de la página actual -->

    <script src="View/Scripts/login.js"></script> 

    <!-- Fin de Script / Estilos CSS  -->

    <style>

        #ulpuntos >li {
         list-style-type: disc !important;
         color: #424242;
         margin-left: 40px;
         line-height: 30px;
        }

        #ulnumeros >li {
         list-style-type: decimal !important;
         color: #424242;
         margin-left: 40px;
         line-height: 30px;
        }
    
    
    </style>

</head>

<body style="background-color: #efefef;">

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menulogin.php';
 ?>

<main>

<section class="container" style="margin: 50px auto 0;max-width: 900px;">

<div class="card white">
    <div class="card-content">
        
        <span class="card-title center-align" style="color: #f39c12;padding-bottom: 10px;"><u>Pautas de grabación audio visual<br>evaluación del servicio del cliente incógnito</u></span>
            <br>
            <div class="row" style="height: 400px;overflow: auto;">
                <div class="col s12 m12 l12">
                    <p>Para cumplir el proceso de visita incógnita para el presente estudio es importante conocer que la grabación audiovisual evalúa cuatro aspectos fundamentales:</p>

                    <ul id="ulpuntos">
                            <li>Presentación del Producto.</li>
                            <li>Calidad de la Atención.</li>
                            <li>Tiempo Medio de Atención.</li>                            
                            <li>Infraestructura y Limpieza.</li>    
                    </ul> 

                    <p>Proceso de grabación (audio y video) del cliente incógnito: Los pasos para la grabación de cada visita será de la siguiente manera:</p>    

                    <ul id="ulnumeros">
                            <li>Encuestador propiamente capacitado.</li>
                            <li>Encuestador con tenencia de lentes espías con cámara de video y grabación de audio en funcionamiento adecuado. Es fundamental hacer una pequeña grabación y validar que todo esté bien.</li>
                            <li><u>Antes de ingresar al local / establecimiento </u><br> Iniciar la grabación. Activar los lentes (hacerlo con prudencia y no captar la atención de otras personas) y ponérselos en la cara al nivel de los ojos  lo cual capté principalmente la imagen completa de la infraestructura, producto y personal de atención.</li>                            
                            <li>De manera inicial, observar y registrar el aspecto exterior del establecimiento (según cuestionario de ítems de cliente incógnito).</li>    
                    </ul> 

                </div>                    
            </div>
            

            <div class="row">
                <div class="col s12 m12 l12 right-align">
                        <a href="./proyectos-asignados" class="waves-effect waves-light btn" style="background-color: #f39c12;">Continuar</a>
                </div>
                
            </div>

    </div>
    
</div>

</section>

</main>    

 <!--   Pie de página -->

<?php 
 include_once './View/Plantillas/pie.php';
 ?>


</body>
</html>