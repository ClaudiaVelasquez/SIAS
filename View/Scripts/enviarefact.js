let getUrl = window.location;
const baseurl =  getUrl.origin + '/' +getUrl.pathname.split('/')[1]; 


 document.addEventListener("DOMContentLoaded",function(){


    (async function Load(){


        async function getData(url){

          const response = await fetch(url);
          const data = await response.json();
          return data;

        }

        async function postData(url, form){

            const response = await fetch(url,
              {
                method: "POST",
                body: form
              }
              )              
              const data = await response.json()
              return data              
        }

        // async function postData(url, form){

        //     return await fetch(url,
        //         {
        //           method: "POST",
        //           body: form
        //         }
        //         ).then(function(response){
        //             return response.json();
        //         }).then(function(obj) {
        //           //swal("Datos guardados", "Continúe con la siguiente página", "success");
        //           // if(!obj){
        //           //     throw "Hubo un error"
        //           // }                            
        //           return obj
  
        //         }).catch(function(error){
        //           alert(error)
        //         });
        //         //return await response.json(); body: JSON.stringify(form),
        //   }


        //========================= Funciones ========================//
        

        async function CargaTipoComprobante() {

          const $tc = document.querySelector("#cbotc");
          const lista = await getData(baseurl + "/api-sias/boleta/tipoboleta");
          let txthml = `<option value="" disabled selected>Seleccione comprobante</option>`;

          lista.forEach(element => {
            txthml +=  `<option value="${element.TipoComprobante_id}">${element.descrip}</option>`;
          });

          $tc.innerHTML= txthml;

        }

        async function token(){

            //const form = document.querySelector("#token")

            const { access_token: token } = await getData(baseurl + "/api-sias/getToken")            
            console.log(token)

            document.querySelector("#token").value=token

        }


        // ======================= Eventos ========================//



        // ======================= Cargado de controles ========================//

        token()
        
        //----------------------//

        




  })();






 });






