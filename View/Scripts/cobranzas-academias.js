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

        async function CargaEstadoComprobante() {

          const $tc = document.querySelector("#cboec");
          const lista = await getData(baseurl + "/api-sias/boleta/estadocomprobante");
          let txthml = `<option value="" disabled selected>Seleccione</option>`;

          lista.forEach(element => {
            txthml +=  `<option value="${element.EstadoComprobante_ID}">${element.descrip}</option>`;
          });

          $tc.innerHTML= txthml;

        }

        async function CargaTipoCobro() {

          const $tc = document.querySelector("#cbotcob");
          const lista = await getData(baseurl + "/api-sias/boleta/tipocobro");
          let txthml = `<option value="" disabled selected>Seleccione</option>`;

          lista.forEach(element => {
            txthml +=  `<option value="${element.TipoCobro_id}">${element.descrip}</option>`;
          });

          $tc.innerHTML= txthml;

        }

        tipocliente = 0;

        async function BuscarCodigo(codigo) {

            try {

                const lista = await getData(baseurl + "/api-sias/socio/BusquedaCodigo/" + codigo);
                console.log(lista);

                lista.forEach(element => {
                    tipocliente = parseInt(element.TipoCliente_ID);
                    document.querySelector("#nombres").value = `${element.apellidoP} ${element.apellidoM}, ${element.nombre}`;
                    document.querySelector("#dni").value = element.nrodoc;
                });

                document.querySelector("#btnAgregar").disabled = false                
                document.querySelector("#btnRegistrar3").disabled = false

            } catch (error) {

                // alert("No se encontró el código")
                                
                swal("Algo salió mal", "No se encontró el código", "warning").then(function(){
                    document.querySelector("#btnAgregar").disabled = true                
                    document.querySelector("#btnRegistrar3").disabled = true
                    document.querySelector("#codigo").focus()
                });                
            }

        }

        async function BuscarNombreConcepto(nombre) {

            try {

                // Cargar lista de conceptos //

                const lista = await getData(baseurl + "/api-sias/concepto/BusquedaNombre/" + nombre);

                let txthml = ``;
                const $searchresults = document.querySelector(".search-results");

                lista.forEach(element => {
                    txthml +=  `<a data-id="${element.ConceptoCobro_ID}" data-nomcobro="${element.nomcobro}" data-costosoc="${element.costosoc}" data-costonso="${element.costonso}" data-moneda="${element.Moneda_ID}" style="display: block; padding: 10px 0 10px 0;border-bottom: 1px solid #999999" href="javascript:void(0)">${element.nomcobro}</a>`;
                });

                $searchresults.innerHTML = txthml;

                // Asignar avento click a cada elemento de la lista de busqueda

                const $searchall = document.querySelectorAll(".search-results a");

                $searchall.forEach(element => {
                    element.addEventListener("click",function(e){

                        if(tipocliente===1){
                            let igv = parseFloat((element.dataset.costosoc * 0.18) / 1.18).toFixed(2);
                            setDetalle(element.dataset.id, element.dataset.nomcobro, 1, igv, element.dataset.costosoc, element.dataset.costosoc, element.dataset.moneda);
                        }else{
                            let igv = parseFloat((element.dataset.costonso * 0.18) / 1.18).toFixed(2);
                            setDetalle(element.dataset.id, element.dataset.nomcobro, 1, igv, element.dataset.costonso, element.dataset.costonso, element.dataset.moneda);
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

        async function UltimaFactura() {

            const lista = await getData("./api-sias/comprobante/UltimaFactura");            
            lista.forEach(element => {
              document.querySelector("#numerocomp").value= element.numerocomp;
            });

        }



        function addDetalle(){

           let deta = document.querySelector("#detalle").children[1];

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

        async function setDetalle(id,concepto,cant,igv,punit,importe,moneda){

            const deta = document.querySelector("#detalle").children[1];
            const numrow = deta.querySelectorAll('tr').length;
            deta.querySelectorAll('tr')[numrow-1].remove();

            textoHtml = `
            <tr data-id="${id}" data-concepto="${concepto}" data-cant="${cant}" data-igv="${igv}" data-punit="${punit}" data-importe="${importe}" data-moneda="${moneda}">
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
                const $controlimporte = element.children[4].querySelector("input");

                $controlcant.addEventListener("change", function() {
                    calcularTotalConcepto(element);
                });

                $controlimporte.addEventListener("keyup", function() {
                    calcularTotalIgvItem(element);
                });

            });

            calcularTotalGeneral()
            
            if(listacant.length==1 && moneda=="D"){
                
                const lista = await getData("./api-sias/tipocambio");            
                lista.forEach(element => {
                document.querySelector("#tcambio").value = element.valor;
                });
                
            }                        

        }

        function calcularTotalIgvItem(elemento){

            elemento.dataset.importe = elemento.children[4].querySelector("input").value
            elemento.dataset.igv = parseFloat((elemento.dataset.importe * 0.18) / 1.18).toFixed(2)

            elemento.children[3].querySelector("input").value = elemento.dataset.igv
            elemento.children[3].querySelector("input").setAttribute("value", elemento.dataset.igv)

            calcularTotalGeneral()

        }

        function calcularTotalConcepto(elemento){

            // Selecciona el data-cant del elemento tr de la tabla detalle

            elemento.dataset.cant = elemento.children[2].querySelector("input").value
            const ptotal = elemento.dataset.cant * elemento.dataset.punit
            elemento.dataset.importe = ptotal
            elemento.dataset.igv = parseFloat((ptotal * 0.18) / 1.18).toFixed(2);

            elemento.children[3].querySelector("input").value = elemento.dataset.igv
            elemento.children[4].querySelector("input").value = ptotal.toFixed(2)

            elemento.children[2].querySelector("input").setAttribute("value", elemento.dataset.cant)
            elemento.children[3].querySelector("input").setAttribute("value", elemento.dataset.igv)
            elemento.children[4].querySelector("input").setAttribute("value", ptotal.toFixed(2))

            calcularTotalGeneral()
        }

        function calcularTotalGeneral(){

            const listafila = document.querySelector("#detalle").children[1].querySelectorAll("tr")
            let sumatotal = 0.00;
            let sumaigv = 0.00;

            listafila.forEach(element => {
                sumaigv += parseFloat(element.children[3].querySelector("input").value)
                sumatotal += parseFloat(element.children[4].querySelector("input").value)
            });

            document.querySelector("#totaligvac").value = sumaigv.toFixed(2)
            document.querySelector("#totalgeneac").value = sumatotal.toFixed(2)
        }


        async function addCabeceraComprobante(){

            const data = document.querySelector("#form3")
            const numcomp = document.querySelector("#numerocomp").value
            const tc = document.querySelector('select[name="cbotc"]').value

            const subTotal = parseFloat(document.querySelector("#totalgeneac").value) - parseFloat(document.querySelector("#totaligvac").value)
            const igv = document.querySelector("#totaligvac").value            
            document.querySelector("#btnRegistrar3").disabled = true            

            const form = new FormData(data)

            // Fecha hoy
            var d = new Date();
            var n = d.getFullYear() + "-" + ("0" + (d.getMonth() + 1)).slice(-2) + "-" + ("0" + (d.getDate())).slice(-2);
            form.append("fechcance",n)
                        
            for(const key of form.keys()){
                console.log(`${key} => ${form.get(key)}`)
            }
            
            const {Respuesta :
                        { Id }
                    } = await postData("./api-sias/comprobante/add",form);

            console.log(Id)
            
            debugger

            await addDetalleComprobante(Id)
                                            
            switch (parseInt(tc)) {
                case 1:
                    addBoleta(Id,numcomp,1)                    
                    break;
                case 2:
                    addFactura(Id,numcomp,subTotal,igv)
                    break;
                default:
                        break;

            }

            document.querySelector("#IdComprobante").value = Id
            document.querySelector("#btnImprimir3").disabled = false
            
        }

        async function addDetalleComprobante(IdComprobante){

            const listafila = document.querySelector("#detalle").children[1].querySelectorAll("tr")   
            
            listafila.forEach(async element => {

                const form = new FormData()
                form.append('Comprobante_ID', IdComprobante)
                form.append('ConceptoCobro_ID', element.dataset.id)
                form.append('cantidad', element.dataset.cant)
                form.append('importe', element.dataset.importe)
                form.append('observa','')

                await postData("./api-sias/detacomprobante/add",form)
                
            })

            //alert(`Comprobante registrado: ${IdComprobante}`)
            swal("Comprobante registrado", `Número de comprobante registrado: ${IdComprobante}`, "success");
        }

        async function addBoleta(IdComprobante, numboleta, serie){

            const form = new FormData()
            form.append('Comprobante_ID', IdComprobante)
            form.append('numbol', numboleta)
            form.append('serie', serie)
            await postData("./api-sias/boleta/add",form)
            //UltimaBoleta()
            console.log("Se insertó boleta")
        }

        async function addFactura(IdComprobante, numfactura, subTotal, igv){

            const form = new FormData()
            form.append('Comprobante_ID', IdComprobante)
            form.append('numfac', numfactura)
            form.append('subTotal', subTotal)
            form.append('igv', igv)
            await postData("./api-sias/factura/add",form)
            //UltimaFactura()
            console.log("Se insertó factura")
        }


        // ======================= Eventos ========================//

        const $codigo = document.querySelector("#codigo");

        $codigo.addEventListener("keydown",function(e){

          if(e.which == 13){
            BuscarCodigo(this.value);
          }

        });


        document.querySelector('select[name="cbotc"]').onchange = function (event) {
            if(!event.target.value){
                alert("Seleccione un valor");
            }else{

                document.querySelector("#numerocomp").value =""

                switch (parseInt(event.target.value)) {
                    case 1:
                        UltimaBoleta()
                        break;
                    case 2:
                        UltimaFactura()    
                        break;
                    default:
                        break;
                }
            }
        }


        const $btnadd = document.querySelector("#btnAgregar");

        $btnadd.addEventListener("click",function(e){
            addDetalle();
        });

        
        const inputs = document.querySelectorAll("form")
        inputs.forEach(element => {
            element.addEventListener("keypress",function(e){
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) { 
                    e.preventDefault();
                    return false;
                }
            })    
        });

        
        const $form3 = document.querySelector("#form3")

        $form3.addEventListener("submit", async function (e){

            e.preventDefault()

            const valor = await swal("¿Confirma registrar el comprobante?", {            
                buttons: true, 
                icon: "warning"            
              })
    
              if (valor) {
                //postData(url,form) 
                addCabeceraComprobante()            
              }              

        })

        const $btnnuevo = document.querySelector("#btnNuevo")

        $btnnuevo.addEventListener("click", function (e){
            alert("Boton nuevo")
            document.querySelector('#cbotc option[value="4"]').value
            
        })

        const $btnimprimir = document.querySelector("#btnImprimir3")

        $btnimprimir.addEventListener("click", function(e){

            PrintFinal()

        })

        // ======================= Cargado de controles ========================//

        await CargaTipoComprobante();
        await CargaEstadoComprobante();
        await CargaTipoCobro();
        
        document.querySelector("#btnAgregar").disabled = true
        document.querySelector("#btnImprimir3").disabled = true
        document.querySelector("#btnRegistrar3").disabled = true

        //----------------------//

        $('select').formSelect();
        $('.sidenav').sidenav();
        $('.tabs').tabs();




  })();






 });






