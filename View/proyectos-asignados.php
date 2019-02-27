<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include_once './View/Plantillas/cabecera.php'; ?>

    <!-- Script / Estilos CSS / Recursos solo de la página actual -->

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

<body style="background-color: white;">

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menulogin.php';
 ?>

<main>


<section class="container" style="margin: 55px auto 0;max-width: 900px;">

    <h5><span class="" style="color: #f39c12;padding-bottom: 10px;">Proyectos asignados</span></h5>    
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
        <div class="col s12 l12">

            <table class="highlight responsive-table">
                    <thead>
                    <tr style="color: #f39c12;">
                        <th>Id</th>
                        <th>Nombre de proyecto</th>
                        <th>Estado</th>
                        <th>Avance (%)</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1801</td>
                        <td>Enc. cliente incógnito BBVA</td>
                        <td>En proceso</td>
                        <td><div class="progress"><div class="determinate" style="width: 70%"></div></div></td>
                        <td class="center-align"><a href="./agencias-asignadas" class="waves-effect waves-light btn" style="background-color: #f39c12;">Ir</a></td>
                    </tr>
                    <tr>
                        <td>1802</td>
                        <td>Enc. cliente incógnito BCP</td>
                        <td>En proceso</td>
                        <td><div class="progress"><div class="determinate" style="width: 50%"></div></div></td>
                        <td class="center-align"><a href="./agencias-asignadas" class="waves-effect waves-light btn" style="background-color: #f39c12;">Ir</a></td>
                    </tr>
                    <tr>
                        <td>1803</td>
                        <td>Enc. cliente incógnito Interbank</td>
                        <td>Terminado</td>
                        <td><div class="progress"><div class="determinate" style="width: 100%"></div></div></td>
                        <td class="center-align"><a href="./agencias-asignadas" class="waves-effect waves-light btn" style="background-color: #f39c12;">Ir</a></td>
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