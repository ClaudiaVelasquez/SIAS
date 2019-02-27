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

    <script>

         $(document).ready(function () {

              $("#cbotipouser").change(function(){


              });

              $("#btniniciar").click(function(){                                 
                //alert($("#cbotipouser option:selected").attr("value"));                

                if (true) {
    
                    window.location="modulo-de-cobranzas-y-facturacion";

                }

              });
            
              

         });
    
    
    </script>


</head>

<body style="background-color: #efefef;">

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

<?php 
 include_once './View/Plantillas/menulogin.php';
 ?>

<main>

    <section class="container" style="margin: 50px auto 0;max-width: 400px;">

        <div class="card white">
            <div class="card-content">
                <!--<span class="card-title center-align" style="border-left: 7px solid #e85b21;border-right: 7px solid #e85b21;">INGRESAR</span>-->
                <span class="card-title center-align" style="color: #2e7d32;padding-bottom: 10px;">INGRESAR</span>
                
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">markunread</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Correo circolo</label>
                        </div>
                    
                        <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" type="password" class="validate">
                        <label for="icon_telephone">Contraseña</label>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col s12 m12 l12">
                                <a id="btniniciar" href="#" class="waves-effect waves-light btn" style="width: 100%;background-color: #4CAF50;">Iniciar sesión</a>
                        </div>
                        
                    </div>

            </div>
            <div class="card-action center-align" style="font-size: 10px;">
                <a href="#" style="color: #00c853 !important;">Olvidé mi contraseña</a>
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