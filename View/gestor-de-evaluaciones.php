<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include_once './View/Plantillas/cabecera.php'; ?>

    <!-- Script / Estilos CSS / Recursos solo de la página actual -->
    <script src="Recursos/js/ion.rangeSlider.js"></script>
    <script src="View/Scripts/gestor-de-proyectos.js"></script>
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

</head>

<body style="background-color: rgb(239, 239, 239);">

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menulogin.php';
 ?>

<main>

<section class="container" style="margin: 55px auto 0;">

    
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">Evaluar visitas</a></li>
        <li class="tab col s4"><a href="#test2">Vista de base de datos</a></li>
        <li class="tab col s4"><a href="#test3">Ver estadísticas</a></li>
        <!-- <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li> -->
        
      </ul>
    </div>

    <div id="test1" class="col s12">

        <!-- inicio de card -->
    
        <div class="card white">
            <div class="card-content">
                <!--<span class="card-title center-align" style="border-left: 7px solid #e85b21;border-right: 7px solid #e85b21;">INGRESAR</span>-->
                <span class="card-title" style="color: #f39c12;padding-bottom: 10px;"></span>
                
                    <div class="row">

                        <div class="input-field col l3 s12">
                            <i class="material-icons prefix">business</i>
                            <input id="icon_prefix" type="text" class="validate" disabled>
                            <label for="icon_prefix">Código de proyecto</label>
                        </div>

                        <div class="input-field col l9 s12">
                            <!-- <i class="material-icons prefix">business</i> -->
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">Buscar proyecto</label>
                        </div>

                        <div class="input-field col l3 s12">
                            <i class="material-icons prefix">face</i>
                            <input id="icon_prefix" type="text" class="validate" disabled>
                            <label for="icon_prefix">N.° documento</label>
                        </div>

                        <div class="input-field col l9 s12">
                            <!-- <i class="material-icons prefix">business</i> -->
                            <input id="nomencuestador" type="text" class="validate">
                            <label for="nomencuestador">Nombre de encuestador</label>
                        </div>
                        


                        
                        
                    </div>



                    <!-- tabla de detalle establecimientos a evaluar -->

                        <div class="row">
                            <div class="col s12 l12">

                                <table class="highlight responsive-table">
                                        <thead>
                                        <tr style="color: #f39c12;">
                                            <th>Departamento</th>
                                            <th>Provincia</th>
                                            <th>Distrito</th>
                                            <th>Oficina</th>
                                            <th class="center-align">Visitas</th>
                                            <th class="center-align">Evaluar</th>
                                            
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
                                            <td id="modal1" class="center-align"><a href="#" class="modal-trigger" ><i class="material-icons prefix">assignment</i></a></td>
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
                                            <td class="center-align"><a href="#" class="modal-trigger" ><i class="material-icons prefix">assignment</i></a></td>
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
                                            <td class="center-align"><i class="material-icons prefix">assignment</i></td>
                                        </tr>
                                        </tbody>
                                </table>


                            </div>        
                        </div>




                    
                    <br>

                    <!-- <div class="row">
                        <div class="col s12 m4 l4">
                                <a href="./pautas-e-indicaciones" class="waves-effect waves-light btn" style="width: 100%;background-color: #f39c12;">Registrar</a>
                        </div>
                        <div class="col s12 m4 l4">
                                <a href="./pautas-e-indicaciones" class="waves-effect waves-light btn" style="width: 100%;background-color: #f39c12;">Modificar</a>
                        </div>
                        <div class="col s12 m4 l4">
                                <a href="./pautas-e-indicaciones" class="waves-effect waves-light btn" style="width: 100%;background-color: #f39c12;">Eliminar</a>
                        </div>                        
                    </div> -->

            </div>

        </div>

        <!-- Fin de card -->
    
    </div>
    
    <div id="test2" class="col s12">
        
        <!-- inicio de card 2 -->
    
        <div class="card white">
            <div class="card-content">
                <!--<span class="card-title center-align" style="border-left: 7px solid #e85b21;border-right: 7px solid #e85b21;">INGRESAR</span>-->
                <span class="card-title" style="color: #f39c12;padding-bottom: 10px; height: 100px;"></span>
                
                    <div class="row">

                        <!-- <div class="input-field col l4 s12">

                            <i class="material-icons prefix">business</i>
                            <input type="text" id="autocomplete-input2" class="autocomplete">
                            <label for="autocomplete-input2">Ingrese código de proyecto</label>

                        </div>

                        <div class="input-field col l8 s12">
                            
                            <input id="icon_telephone" type="text" class="validate" disabled>
                            <label for="icon_telephone">Nombre de proyecto</label>
                        </div> -->


                        
                    </div>

                    

                    
                    <br>

                    <!-- <div class="row">
                        
                       
                        <div class="col s12 m4 l4">
                                <a href="./pautas-e-indicaciones" class="waves-effect waves-light btn" style="width: 100%;background-color: #f39c12;">Borrar lista</a>
                        </div>
                                             
                    </div> -->

            </div>

        </div>

        <!-- Fin de card 2 -->


    </div>
    
    <div id="test3" class="col s12">

        <!-- inicio de card 3 -->
    
        <div class="card white">
            <div class="card-content">
                <!--<span class="card-title center-align" style="border-left: 7px solid #e85b21;border-right: 7px solid #e85b21;">INGRESAR</span>-->
                <span class="card-title" style="color: #f39c12;padding-bottom: 10px; height: 100px;"></span>
                                
                    

                    
                    <br>

                    <!-- <div class="row">
                        
                        <div class="col s12 m4 l4">
                            <a href="#" class="waves-effect waves-light btn" style="width: 100%;background-color: #1b479a;">Agregar nuevo</a>
                        </div>
                                             
                    </div> -->

                    

            </div>

        </div>

        <!-- Fin de card 3 -->
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