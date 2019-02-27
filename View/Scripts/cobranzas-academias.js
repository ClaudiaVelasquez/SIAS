

 document.addEventListener("DOMContentLoaded",function(){


    (async function Load(){
  
    
        async function getData(url){
  
          const response = await fetch(url);
          const data = await response.json();
          return data;
  
        }

        async function postData(url){
  
          const response = await fetch(url, 
            {
            method: 'POST',
            body: { "Cliente_id" : "0235401" }
            }
          );

          const data = await response.json();
          return data;
  
        }

      

        // Funciones //
  
        async function CargaTipoComprobante() {
  
          const $tc = document.querySelector("#cbotc");
          const lista = await getData("http://localhost:81/SIAS/api-sias/boleta/tipoboleta");
          let txthml = `<option value="" disabled selected>Seleccione comprobante</option>`;
  
          lista.forEach(element => {
            txthml +=  `<option value="${element.TipoComprobante_id}">${element.descrip}</option>`;
          });

          $tc.innerHTML= txthml;
          
        }

        async function CargaEstadoComprobante() {
  
          const $tc = document.querySelector("#cboec");
          const lista = await getData("http://localhost:81/SIAS/api-sias/boleta/estadocomprobante");
          let txthml = `<option value="" disabled selected>Seleccione</option>`;

          lista.forEach(element => {
            txthml +=  `<option value="${element.EstadoComprobante_ID}">${element.descrip}</option>`;
          });

          $tc.innerHTML= txthml;
          
        }

        async function CargaTipoCobro() {
  
          const $tc = document.querySelector("#cbotcob");
          const lista = await getData("http://localhost:81/SIAS/api-sias/boleta/tipocobro");
          let txthml = `<option value="" disabled selected>Seleccione</option>`;

          lista.forEach(element => {
            txthml +=  `<option value="${element.TipoCobro_id}">${element.descrip}</option>`;
          });

          $tc.innerHTML= txthml;
          
        }

        tipocliente = 0;

        async function BuscarCodigo(codigo) {

            try {

                const lista = await getData("http://localhost:81/SIAS/api-sias/socio/BusquedaCodigo/" + codigo); 
                console.log(lista);

                lista.forEach(element => {
                    tipocliente = parseInt(element.TipoCliente_ID);
                    document.querySelector("#nombres3").value = `${element.apellidoP} ${element.apellidoM}, ${element.nombre}`;            
                    document.querySelector("#dni").value = element.nrodoc;            
                });
                
            } catch (error) {

                // alert("No se encontró el código")
                
                swal("Algo salió mal", "No se encontró el código", "warning");
                
            }          
          
        }

        async function BuscarNombreConcepto(nombre) {

            try {

                // Cargar lista de conceptos //

                const lista = await getData("http://localhost:81/SIAS/api-sias/concepto/BusquedaNombre/" + nombre);                 

                let txthml = ``;
                const $searchresults = document.querySelector(".search-results");
    
                lista.forEach(element => {
                    txthml +=  `<a data-id="${element.ConceptoCobro_ID}" data-nomcobro="${element.nomcobro}" data-costosoc="${element.costosoc}" data-costonso="${element.costonso}" style="display: block; padding: 10px 0 10px 0;border-bottom: 1px solid #999999" href="javascript:void(0)">${element.nomcobro}</a>`;
                });

                $searchresults.innerHTML = txthml;

                // Asignar avento click a cada elemento de la lista de busqueda

                const $searchall = document.querySelectorAll(".search-results a");  
                
                $searchall.forEach(element => {
                    element.addEventListener("click",function(e){                        
                        
                        if(tipocliente===1){
                            let igv = parseFloat((element.dataset.costosoc * 0.18) / 1.18).toFixed(2);
                            setDetalle(element.dataset.id, element.dataset.nomcobro, 1, igv, element.dataset.costosoc, element.dataset.costosoc);
                        }else{
                            let igv = parseFloat((element.dataset.costonso * 0.18) / 1.18).toFixed(2);
                            setDetalle(element.dataset.id, element.dataset.nomcobro, 1, igv, element.dataset.costonso, element.dataset.costonso);
                        }
                                                                                          
                    });    
                });                            

                // Asignar avento keyup a cada elemento de la lista de busqueda

                //document.querySelector("detalle").children[1];


                
            } catch (error) {
                document.querySelector(".search-results").innerHTML = ``;
            }    
            
            
        }


        async function UltimaBoleta() {

            const lista = await getData("./api-sias/comprobante/UltimaBoleta"); 
            console.log(lista);
            lista.forEach(element => {
              document.querySelector("#numerocomp").value= element.numerocomp;
            });
            
        }



        function addDetalle(){

            const deta = document.querySelector("#detalle").children[1];

            let textoHtml = `
            <tr">
                <td>000</td>
                <td>
                    <div class="input-field">                    
                        <input class="search" placeholder="Buscar concepto">
                        <div class="search-results" style="padding-left: 5px;position: absolute;z-index: 900;width: 100%;background-color: white;">
                            
                        </div>
                    </div>                
                </td>
                <td>
                    <input id="" type="number" class="right-align" value="">
                </td> 
                <td><input id="" type="text" class="right-align" value=""></td>
                <td><input id="" type="text" class="right-align" value=""></td>
                <td><input id="" type="text" value=""></td>                                                   
            </tr>`;

            deta.innerHTML += textoHtml;

            
            const $search = document.querySelector(".search");

            $search.addEventListener('keyup',function(e){

                document.querySelector(".search-results").innerHTML = "";
                BuscarNombreConcepto(this.value);

            });


        }

        function setDetalle(id,concepto,cant,igv,punit,importe){

            const deta = document.querySelector("#detalle").children[1];
            const numrow = deta.querySelectorAll('tr').length;
            deta.querySelectorAll('tr')[numrow-1].remove();
        
            textoHtml = `
            <tr data-id="${id}" data-concepto="${concepto}" data-cant="${cant}" data-igv="${igv}" data-punit="${punit}" data-importe="${importe}">
                <td>${id}</td>
                <td>
                    ${concepto}              
                </td>
                <td>
                    <input id="" type="number" class="right-align" value="${cant}">
                </td> 
                <td><input id="" type="text" class="right-align" value="${igv}"></td>
                <td><input id="" type="text" class="right-align" value="${importe}"></td>
                <td><input id="" type="text" value=""></td>                                                   
            </tr>`;
            deta.innerHTML += textoHtml;

            // Agregar evento de busqueda

            
            const listacant = document.querySelector("#detalle").children[1].querySelectorAll("tr")
            
            listacant.forEach(element => {
                const $controlcant = element.children[2].querySelector("input");
                
                $controlcant.addEventListener("change", function() {                
                    calcularTotalConcepto(element);
                });

            });
        


        }

        function calcularTotalConcepto(elemento){

            elemento.dataset.cant = elemento.children[2].querySelector("input").value
            const ptotal = elemento.dataset.cant * elemento.dataset.punit
            elemento.children[4].querySelector("input").value = ptotal
            
        }

        // Eventos //
        
        const $codigo = document.querySelector("#codigo");  

        $codigo.addEventListener("keydown",function(e){

          if(e.which == 13){                 
            BuscarCodigo(this.value);
          }
                      
        });

        
        document.querySelector('select[name="cbotc"]').onchange = async function (event) {
            if(!event.target.value){
                alert("Seleccione un valor");
            }else{

                switch (parseInt(event.target.value)) {
                    case 1:
                        await UltimaBoleta();
                    default:
                        break;
                }
            }
        }


        const $btnadd = document.querySelector("#btnAgregar");  

        $btnadd.addEventListener("click",function(e){            

            //addDetalle('22', 'Clases de natación', 12, 0.18, 1.18);
            addDetalle();
            
        });

    
        // Cargado de controles //
  
        await CargaTipoComprobante();
        await CargaEstadoComprobante();
        await CargaTipoCobro();
        

        //----------------------//


        $('select').formSelect();
        $('.sidenav').sidenav();    
        $('.tabs').tabs();
    

  
  
  })();
  
  




 });






