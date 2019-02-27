
<!--****************************************************-->

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CIRCOLO | SIAS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="Recursos/js/jquery.min.js"></script>

<!--Import Google Icon Font-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="Recursos/css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/main.css" />
<script src="Recursos/js/main.js"></script> 
      
<!--Recursos / plugins-->

<!-- <script src="Recursos/js/lightbox-plus-jquery.js"></script> -->
<!-- <link rel="stylesheet" href="Recursos/css/lightbox.css"> -->

<link rel="stylesheet" href="Recursos/css/jquery.bxslider.css">
<script src="Recursos/js/jquery.bxslider.min.js"></script> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

/* Script de botón flotante mensajeria en paginas */


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
    direction: 'top'
    });
});

/* ********************************************* */

          /* Script scroll click */ 
 /*         
          $(document).ready(function(){
              
                    $('a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $(this).attr('href') ).offset().top - 50
                        }, 1500);
                    return false;
                    });    

          });
 */          
          /* Evento al terminar de cargar la página*/   
          
          $(window).on("load", function (e) {
            $('#page-preloader').fadeOut(500);                
          })

</script>







