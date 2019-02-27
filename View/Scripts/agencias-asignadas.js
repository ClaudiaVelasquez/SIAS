
  $(document).ready(function(){


    /* Control de rango de fecha */     

    $("#range").ionRangeSlider({
        hide_min_max: true,
        keyboard: true,
        min: 0,
        max: 31,
        from: 0,
        to: 15,
        type: 'double',
        step: 1,
        prefix: "Días",
        grid: true
    });



 });