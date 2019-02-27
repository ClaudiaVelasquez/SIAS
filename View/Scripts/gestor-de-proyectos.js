
  $(document).ready(function(){

    /* Control de fecha */     

    $('.datepicker').datepicker();

    /* Habilitar tabs */

    $('.tabs').tabs();

    /* Efecto objetos select formulario */     
    $(document).ready(function(){
       $('select').formSelect();
    });

    // autocompletado para cliente

    $('input.autocomplete').autocomplete({
      data: {
        "Apple": null,
        "Microsoft": null,
        "Google": 'https://placehold.it/250x250'
      },
    });

    // Modal

    $('.modal').modal();
          

 });