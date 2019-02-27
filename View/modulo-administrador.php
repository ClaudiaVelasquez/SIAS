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


</head>

<body>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menulogin.php';
 ?>

<main>

<section class="container" style="margin: 150px auto 0;max-width: 750px;">

    
    <div class="row">
        <div class="col s12 m6 l6" style="padding-top:5px;">
            <a href="./mantenimiento-usuarios" class="waves-effect waves-light btn-large" style="background-color:#112d5c;width:100%;"><i class="material-icons left" style="font-size:30px;">face</i>Mantenimiento de usuarios</a>
        </div>
        <div class="col s12 m6 l6" style="padding-top:5px;">
            <a href="./gestor-de-proyectos" class="waves-effect waves-light btn-large" style="background-color:#112d5c;width:100%;"><i class="material-icons left" style="font-size:30px;">settings_applications</i>Gestor de proyectos</a>
        </div>

    </div>

    <!-- Botón para el cliente  
        <div class="row">
        <div class="col s12 m2 l2" style="padding-top:5px;">
            
        </div>
        <div class="col s12 m8 l8" style="padding-top:5px;">
            <a class="waves-effect waves-light btn-large" style="background-color:#112d5c;width:100%;"><i class="material-icons left" style="font-size:30px;">show_chart</i>Datos y estadísticas del cliente</a>
        </div>
        <div class="col s12 m2 l2" style="padding-top:5px;">    
            
        </div>
    </div>
     -->

    <div class="row">
        <div class="col s12 m6 l6" style="padding-top:5px;">
            <a href="./gestor-de-evaluaciones" class="waves-effect waves-light btn-large" style="background-color:#112d5c;width:100%;"><i class="material-icons left" style="font-size:30px;">group</i>Gestor de evaluaciones</a>
        </div>
        <div class="col s12 m6 l6" style="padding-top:5px;">    
            <a href="./mantenimiento-entidades-establecimientos" class="waves-effect waves-light btn-large" style="background-color:#112d5c;width:100%;"><i class="material-icons left" style="font-size:30px;">assignment</i>Mant. Establecimiento y enti</a>
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