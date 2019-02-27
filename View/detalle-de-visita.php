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

    <h5><span class="" style="color: #f39c12;padding-bottom: 10px;"> <i class="material-icons prefix">filter_1</i> Detalle de visita uno</span></h5>    
    <hr>
    <br><br>

    <div class="row">
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">home</i>
                          <input id="icon_prefix3" type="text" class="validate" value="Interbank Vea Brasil" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">Oficina</label>
        </div>        
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">map</i>
                          <input id="icon_prefix3" type="text" class="validate" value="Av. Brasil 1568 - Pueblo Libre" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">Dirección de oficina</label>
        </div>
    </div>


    <div class="row">
        
        <form action="#">
            <div class="file-field input-field col s12 l12">
            <div class="btn" style="background-color: #1b479a">
                <span>File</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Seleccione el archivo de video">
            </div>
            </div>
        </form>
                      
    </div>


    <div class="row">
        <div class="col s12 l3">
            <a href="#" class="waves-effect waves-light btn" style="width: 100%;margin-top: 10px;background-color: #1b479a;">Cargar</a>
        </div>
        <div class="col s12 l3">
            <a href="#" class="waves-effect waves-light btn" style="width: 100%;margin-top: 10px;background-color: #1b479a;">Cancelar</a>
        </div>
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">date_range</i>
                          <input id="icon_prefix3" type="date" class="validate" value="Agencia Interbank Vea Brasil" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">Fecha de cargado</label>
        </div>        

    </div>

    <hr>

    <div class="row">
        <div class="input-field col s12 l6">
            <i class="material-icons prefix">date_range</i>
            <input type="text" class="datepicker"  placeholder="Fecha de visita">            
        </div>
    </div>

    <div class="row">
        <div class="col s12 l12">
            <h5 style="color: #f39c12;"><u>Observaciones:</u></h5>            
            <br><br>            
        </div>

        <div class="col s12 l6">
            
            <label>                
                <input type="checkbox" class="filled-in" checked="checked"/>
                <span>CAMBIO DE DIRECCIÓN</span>
            </label>
            <br><br>
            <label>                
                <input type="checkbox" class="filled-in"/>
                <span>DIRECCIÓN NO EXISTE</span>
            </label>
            <br><br>
            <label>                
                <input type="checkbox" class="filled-in"/>
                <span>EL LOCAL YA NO FUNCIONA EN ESTA DIRECCIÓN</span>
            </label>

        </div>

        <div class="col s12 l6">
            
            <label>                
                <input type="checkbox" class="filled-in"/>
                <span>NO SE REALIZAN LOS CAMBIOS</span>
            </label>
            <br><br>
            <label>                
                <input type="checkbox" class="filled-in"/>
                <span>NO HAY OBSERVACIONES</span>
            </label>
            <br><br>
            <label>                
                <input type="checkbox" class="filled-in"/>
                <span>OTROS</span>
                <input id="icon_prefix3" type="text" class="validate" value="" style="" placeholder="Escriba otras observaciones">
            </label>
            
        </div>

    </div>

    <div class="row">
        <div class="col s12 l12 right-align">
            <a href="#" class="waves-effect waves-light btn" style="background-color: #f39c12;">Grabar</a>
            <a href="./agencias-asignadas" class="waves-effect waves-light btn" style="background-color: #f39c12;">Volver</a>
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