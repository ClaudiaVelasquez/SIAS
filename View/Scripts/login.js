
  /* Efecto objetos select formulario */     
  $(document).ready(function(){
    $('select').formSelect();
  });


$(document).ready(function(){

      $.ajax({
        type: 'GET',
        url: './api-sigop/boleta/tipoboleta',
        scriptCharset: "utf-8",
        async: false,
        success: function (response) {
              var socio = JSON.parse(response);

              // console.log(socio);
              // alert(JSON.stringify(socio));
              
              },
                error: function (response) {  								
        alert("Error:" + response);
        }
      
      });     

 });




document.addEventListener("DOMContentLoaded",function(){




  (async function Load(){

  
      async function getData(url){

        const response = await fetch(url);
        const data = await response.json();
        return data;

      }

      async function CargaTipoComp(params) {

        const $tc = document.querySelector("#");

        const lista = await getData("http://localhost:81/SIAS/api-sigop/boleta/tipoboleta");

        lista.forEach(element => {
            console.log(element);
        });
        
      }


      const lista2 = await getData("http://localhost:81/SIAS/api-sigop/boleta/tipoboleta");
      console.log(lista2);



})();






 });


