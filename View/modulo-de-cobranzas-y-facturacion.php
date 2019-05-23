<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include_once './View/Plantillas/cabecera.php'; ?>

    <!-- Script / Estilos CSS / Recursos solo de la página actual -->
    <script src="Recursos/js/ion.rangeSlider.js"></script>
    <script src="View/Scripts/modulo-de-cobranzas-y-facturacion.js"></script>
    <script src="View/Scripts/cobranzas-academias.js"></script>
    <link rel="stylesheet" href="Recursos/css/ion.rangeSlider.css" /> 
    <link rel="stylesheet" href="Recursos/css/ion.rangeSlider.skinFlat.css" />
    <!-- Fin de Script / Estilos CSS  -->

    <style>

        .tabs .tab a{
            color: #112d5c;
            background-color: white;
        } /*Black color to the text*/

        .tabs .tab a:hover {
            background-color: white;
            color: #112d5c;
        } /*Text color on hover*/

        .tabs .tab a.active {
            background-color: white;
            color: #112d5c;
        } /*Background and text color when a tab is active*/

        .tabs .indicator {
            background-color: #112d5c;
        } /*Color of underline*/


        .tabs .tab a:focus, .tabs .tab a:focus.active {
            background-color: #e8f0ff;
            outline: none;
        }
    
    </style>


    <script type="text/javascript">

        function PrintFinal() {
            
            var myWindow = window.open('<?php echo URL;?>/comprobante-print?pedido=' + document.querySelector("#IdComprobante").value, 'Imprimir comprobante', 'height=500,width=600');
            myWindow.onload=function(){ // necessary if the div contain images
                myWindow.focus(); // necessary for IE >= 10
            };
        }   



    </script>

</head>

<body style="background-color: rgb(239, 239, 239);">

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menu.php';
 ?>

<main>

<section class="container" style="margin: 55px auto 0;">

    
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">Cobro de cuotas sociales</a></li>
        <li class="tab col s4"><a href="#test2">Cobro de servicios y alquileres</a></li>
        <li class="tab col s4"><a href="#test3">Cobro de academias</a></li>
        <!-- <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li> -->
        
      </ul>
    </div>

    <div id="test1" class="col s12">

        <!-- inicio de card -->

        <div class="card white">
            <div class="card-content">
                
                <span class="card-title" style="color: #f39c12;padding-bottom: 10px;"></span>
            
                <?php
                   include './View/card-cuotas-sociales.php';
                ?>

            </div>
                    <br>
                    <div class="row">
                    </div>

        </div>

    </div>

        <!-- Fin de card -->
    
    </div>
    
    <div id="test2" class="col s12">
        
        <!-- inicio de card 2 -->
    
        <?php 
            include './View/card-cobro-academias.php';
        ?>
        
        
        <!-- Fin de card 2 -->


    </div>
    
    <div id="test3" class="col s12">
        
         <!--  Card de cobranzas -->

            <?php 
            // include './View/card-cobro-academias.php';
            ?>
        
    </div>
    
  
  </div>



</section>


  <!-- Modal Structure -->

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5 style="color: #112d5c;">Establecimientos asignados</h5>
      <hr>
      <p>
                <table class="highlight responsive-table" style="margin-top: 20px;">
                        <thead>
                        <tr style="color: #f39c12;">
                            <th>Entidad</th>
                            <th>Establecimiento</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Interbank</td>
                            <td>IBK Plaza Vea Brasil</td>
                            <td><a href="#"><i class="material-icons prefix" style="font-size: 30pt;">save</i></a></td>
                            <td><a href="#"><i class="material-icons prefix" style="font-size: 30pt;">remove_circle_outline</i></a></td>
                                                                   
                        </tr>
                        <tr>
                            <td>Interbank</td>
                            <td>IBK Centro Civico Real Plaza</td>
                            <td><a href="#"><i class="material-icons prefix" style="font-size: 30pt;">save</i></a></td>
                            <td><a href="#"><i class="material-icons prefix" style="font-size: 30pt;">remove_circle_outline</i></a></td>
                               
                        </tr>
                        <tr>
                            <td>*********</td>
                            <td>
                                <div class="input-field">
                                    
                                    <input id="search" placeholder="Buscar establecimiento">
                                    <div class="search-results" style="padding-left: 5px;">
                                        <a style="display: block;" href="#">IBK Plaza Vea Brasil</a>
                                        <a style="display: block;" href="#">IBK Centro Civico Real Plaza</a>
                                        <a style="display: block;"  href="#">IBK C.C. Royal Plaza</a>
                                    </div>
                                </div>
                            </td>
                            <td><a href="#"><i class="material-icons prefix" style="font-size: 30pt;">save</i></a></td>
                            <td><a href="#"><i class="material-icons prefix" style="font-size: 30pt;">remove_circle_outline</i></a></td>
                            
                        </tr>
                        </tbody>
                </table>

      </p>

        <div class="row">                        
                <div class="col s12 m6 l6">
                    <a href="#" class="waves-effect waves-light btn" style="width: 100%;background-color: #1b479a;">Nuevo establecimiento</a>
                </div>                                             
        </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn" style="background-color: #f39c12;">Salir</a>
    </div>
  </div>

  <!-- Fin modal Structure -->

</main>    

 <!--   Pie de página -->

<?php 
 include_once './View/Plantillas/pie.php';
 ?>


</body>
</html>