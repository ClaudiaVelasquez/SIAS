<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include_once './View/Plantillas/cabecera.php'; ?>

    <!-- Script / Estilos CSS / Recursos solo de la página actual -->
    <script src="Recursos/js/ion.rangeSlider.js"></script>
    <script src="View/Scripts/agencias-asignadas.js"></script>
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

    <h5><span class="" style="color: #f39c12;padding-bottom: 10px;">Agencias asignadas</span></h5>    
    <hr>
    <br><br>

    <div class="row">
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">credit_card</i>
                          <input id="icon_prefix3" type="text" class="validate" value="45347734" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">N.° de documento</label>
        </div>        
        <div class="input-field col s12 l6">
                          <i class="material-icons prefix">account_box</i>
                          <input id="icon_prefix3" type="text" class="validate" value="Jorge Winder" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">Nombres</label>
        </div>
    </div>


    <div class="row">
        <div class="input-field col s12 l12">
                          <i class="material-icons prefix">domain</i>
                          <input id="icon_prefix3" type="text" class="validate" value="Enc. cliente incógnito Interbank" style="font-weight: 700;" disabled>
                          <label for="icon_prefix3" class="">Proyecto</label>
        </div>               
    </div>

    <div class="row">
        <div class="col s12 l12">
            <input type="text" id="range" value="" name="range" />
        </div>
        
    </div>


    <div class="row">
        <div class="col s12 l12">

            <table class="highlight responsive-table">
                    <thead>
                    <tr style="color: #f39c12;">
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Oficina</th>
                        <th>Visitas</th>
                        <th>Observación</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Lima</td>
                        <td>Lima</td>
                        <td>Pueblo Libre</td>
                        <td>Interbank Vea Brasil</td>
                        <td class="center-align">
                            <a href="./detalle-de-visita" style=""><i class="material-icons prefix">filter_1</i></a>
                            <a href="./detalle-de-visita" style=""><i class="material-icons prefix">filter_2</i></a>
                            <a href="./detalle-de-visita" style=""><i class="material-icons prefix">filter_3</i></a>
                            <a href="./detalle-de-visita" style=""><i class="material-icons prefix">filter_4</i></a>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Lima</td>
                        <td>Lima</td>
                        <td>Cercado de Lima</td>
                        <td>IBK Centro Civico Real Plaza</td>
                        <td class="center-align">
                            <a href="#" style=""><i class="material-icons prefix" style="color: #26a69a !important;">filter_1</i></a>
                            <a href="#" style=""><i class="material-icons prefix">filter_2</i></a>
                            <a href="#" style=""><i class="material-icons prefix">filter_3</i></a>
                            <a href="#" style=""><i class="material-icons prefix">filter_4</i></a>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Lima</td>
                        <td>Lima</td>
                        <td>Pueblo Libre</td>
                        <td>Interbank La Rambla</td>
                        <td class="center-align">
                            <a href="#" style=""><i class="material-icons prefix" style="color: #26a69a !important;">filter_1</i></a>
                            <a href="#" style=""><i class="material-icons prefix" style="color: #26a69a !important;">filter_2</i></a>
                            <a href="#" style=""><i class="material-icons prefix" style="color: #26a69a !important;">filter_3</i></a>
                            <a href="#" style=""><i class="material-icons prefix">filter_4</i></a>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
            </table>


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