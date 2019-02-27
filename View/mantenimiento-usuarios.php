<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include_once './View/Plantillas/cabecera.php'; ?>

    <!-- Script / Estilos CSS / Recursos solo de la página actual -->
    <script src="Recursos/js/ion.rangeSlider.js"></script>
    <script src="View/Scripts/detalle-de-visita.js"></script>
    <link rel="stylesheet" href="Recursos/css/ion.rangeSlider.css" /> 
    <link rel="stylesheet" href="Recursos/css/ion.rangeSlider.skinFlat.css" />
    <!-- Fin de Script / Estilos CSS  -->

    <style>
    
    </style>

</head>

<body style="background-color: white;">

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menulogin.php';
 ?>

<main>


<section class="container" style="margin: 55px auto 0;max-width: 900px;">

    <h5><span class="" style="color: #f39c12;padding-bottom: 10px;"> <i class="material-icons prefix">filter_1</i> Mantenimiento de usuarios</span></h5>    
    <hr>
    <br><br>

    <div class="row">
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">person_add</i>
                          <input id="icon_prefix3" type="text" value="000000001" style="font-weight: 700;">
                          <label for="icon_prefix3" class="">Usuario</label>
        </div>        
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">face</i>
                          <input id="icon_prefix3" type="text" value="Jorge Winder Ávila" style="font-weight: 700;">
                          <label for="icon_prefix3" class="">Nombres Completos</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">library_books</i>
                          <input id="icon_prefix3" type="text" value="45347734" style="font-weight: 700;">
                          <label for="icon_prefix3" class="">Documento</label>
        </div>        
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">email</i>
                          <input id="icon_prefix3" type="text" value="jorge.winder@gmail.com" style="font-weight: 700;">
                          <label for="icon_prefix3" class="">Correo electrónico</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">https</i>
                          <input id="icon_prefix3" type="text" class="validate" value="*********" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">Contraseña</label>
        </div>        
        <div class="input-field col s12 l6">
        </div>
    </div>

    <div class="row">
        <div class="col s12 l12 center-align">
            <a href="#" class="waves-effect waves-light btn" style="background-color: #f39c12;width:20%;">Nuevo</a>
            <a href="#" class="waves-effect waves-light btn" style="background-color: #f39c12;width:20%;">Registrar</a>
            <a href="#" class="waves-effect waves-light btn" style="background-color: #f39c12;width:20%;">Modificar</a>
            <a href="#" class="waves-effect waves-light btn" style="background-color: #f39c12;width:20%;">Eliminar</a>
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