<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <?php include_once './View/Plantillas/cabecera.php'; ?>
	   
        
        <!--Escript de vista-->
        <!-- <script type="text/javascript" src="<?php //echo URL;?>/Views/script/comprobante-print.js"></script> -->

        <script type="text/javascript">


 function PrintDiv(id) {
            var data=document.getElementById(id).innerHTML;
            
            var myWindow = window //.open('', 'Imprimir comprobante', 'height=500,width=700');
            myWindow.document.write(`<html><head>
                                            <title>Imprimir comprobante</title>
                                            </head>`);
            myWindow.document.write('<body style="font-family: tahoma;font-size: 9pt;">');
            myWindow.document.write(data);
            myWindow.document.write('</body></html>');
            //myWindow.document.close(); // necessary for IE >= 10

            myWindow.print();

            // myWindow.onload=function(){ // necessary if the div contain images
            //     myWindow.focus(); // necessary for IE >= 10
            //     myWindow.print();
            //     myWindow.close();
            // };
}


document.addEventListener("DOMContentLoaded",function(){

    (async function Load(){

        //alert(document.querySelector("#idcomprobante").value)

        async function getData(url){

          const response = await fetch(url);
          const data = await response.json();
          return data;

        }

        async function ConsultarComprobante(idcomprobante){

            const url = "./api-sias/comprobante/" + idcomprobante
            const lista = await getData(url)
            let html = ""


            console.log(lista)

            lista.forEach(element => {

                document.querySelector("#Comprobante").textContent = element.Comprobante
                document.querySelector("#Serie").textContent = element.Serie.padStart(4, "B000")
                document.querySelector("#Numero").textContent = element.Numero.padStart(7, "0000000")
                document.querySelector("#fechcomp").textContent = element.fechcomp 
                document.querySelector("#Usuario").textContent = element.Usuario 
                document.querySelector("#nrodoc").textContent = element.nrodoc 
                document.querySelector("#Codigo").textContent = element.Codigo 
                document.querySelector("#Nombres").textContent = element.Nombres 
                document.querySelector("#nomcate").textContent = element.nomcate 
                document.querySelector("#igv").textContent = element.igv 
                document.querySelector("#total").textContent = element.total 
                document.querySelector("#opgrav").textContent = ( parseFloat(element.total) - parseFloat(element.igv) )

                html = `
                <div style="display: table; width: 99%;">
                    <div style="display: table-row;">
                        <div style="display: table-cell;">${element.ConceptoCobro_ID}</div>
                        <div style="display: table-cell;">${element.nomcobro}</div>
                        <div style="display: table-cell; text-align: right">${element.importe} </div> 
                    </div>                   
                </div>`
                
                document.querySelector("#detallepedido").innerHTML = document.querySelector("#detallepedido").innerHTML +  html

            });

             

        }

        ConsultarComprobante(document.querySelector("#idcomprobante").value)
        
        setTimeout(function(){
                window.print();                
                //PrintDiv("contenido")
        },3000);
       


    })()

})



</script>

    </head>

    <body style="font-family: tahoma;font-size: 10pt; width: 100%">
    <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>
    

    <section id="contenido" class="content" style="width: 100%">
    
    <input type="hidden" id="idcomprobante" value="<?php echo $_REQUEST["pedido"];?>">

            <br>
               


             <table class="">
                 <thead>
                     <tr>
                        <th style="width: 23%;"></th>
                        <th data-field="name" style="width: 43%; text-align: center; font-size: 12pt;">CIRCOLO SPORTIVO ITALIANO</th>
                        <th></th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>  
                        <td style="width: 23%;"></td>                          
                        <td style="width: 33%;text-align: center;">RUC: 20167858067</td>
                        <td></td>                          
                     </tr>                     
                     <tr>                         
                        <td style="width: 23%;"></td>
                        <td style="width: 53%;text-align: center;">AV. JUAN PABLO FERNANDINI 1530 LIMA - LIMA - PUEBLO LIBRE</td> 
                        <td></td>                                 
                     </tr>
                     <tr>
                         <td style=""></td>
                         <td style="text-align: center;"><b><span id="Comprobante"></span></b></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td style=""></td>
                         <td style="text-align: center;"><b><span id="Serie">0000</span>-<span id="Numero">000000</span></b></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td style="width: 23%;" >Fecha de emisión:</td>
                         <td style="text-align: left;"><span id="fechcomp"></span></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td style="width: 23%;">Cajero(a):</td>
                         <td style="text-align: left;"><span id="Usuario"></span></td>
                         <td></td>
                     </tr>
                 </tbody>
             </table>   
                                     
            <br>

            <div style="display: table; width: 300px;">
                    <div style="display: table-row;">
                        <div style="display: table-cell;">RUC / DNI: <span id="nrodoc"></span></div>
                        <div style="display: table-cell; text-align: left">CÓDIGO: <span id="Codigo">0000000</span></div> 
                    </div>                   
            </div>
            
            NOMBRE: <span id="Nombres"></span>
            <br>
            CATEGORÍA: <span id="nomcate"></span>
            <br>
            <br>
        
                <div style="display: table; width: 99%;">
                    <div style="display: table-row;">
                        <div style="display: table-cell;">COD.</div>
                        <div style="display: table-cell;">DESCRIPCIÓN</div>
                        <div style="display: table-cell; text-align: right">TOTAL </div> 
                    </div>                   
                </div>    
        
        <br>
        
        <div class="">                
               <div class="row" style="width: 100%;border-top: 1px black solid;border-top-style: dashed;">
                   <div class="col-xs-12"></div>                   
               </div>
        </div>


    	<div id="detallepedido">
               
        </div>

        <div class="container-fluid">                
               <div class="row" style="width: 100%;border-top: 1px black solid;border-top-style: dashed;">
                   <div class="col-xs-12"></div>                   
               </div>
        </div>     

        <br>

    
        <div style="display: table; width: 99%;">
                    <div style="display: table-row;">
                        <div style="display: table-cell;">Op. Gravada</div>
                        <div style="display: table-cell; text-align: right"><span id="opgrav">0.00</span></div> 
                    </div>                   
        </div>
        <div style="display: table; width: 99%;">
                    <div style="display: table-row;">
                        <div style="display: table-cell;">I.G.V</div>
                        <div style="display: table-cell; text-align: right"><span id="igv">0.00</span></div> 
                    </div>                   
        </div> 
        <div style="display: table; width: 99%;">
                    <div style="display: table-row;">
                        <div style="display: table-cell;"><b>IMPORTE TOTAL</b></div>
                        <div style="display: table-cell; text-align: right"><b><span id="total">0.00</span></b></div> 
                    </div>                   
        </div>

        <br>

        <div class="">  
            <div class="row" style="width: 100%;">
                       <div class="col-xs-12">SON : 00/100 Soles</div>                               
            </div>
        </div>

        <div class="container-fluid">                
               <div class="row" style="width: 100%;">
                   <div class="col-xs-9" style="font-size: 8pt;border-top: 1px black solid;border-top-style: dashed;">
                    <label id='Nota'></label>
                </div>                   
               </div>
        </div>    

         <br>

    
    
    </section>

        
    </body>
</html>    