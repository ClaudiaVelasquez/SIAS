<!-- inicio de card 3 -->
    
<div class="card white">
            <div class="card-content">
                <!--<span class="card-title center-align" style="border-left: 7px solid #e85b21;border-right: 7px solid #e85b21;">INGRESAR</span>-->
                <span class="card-title" style="color: #f39c12;padding-bottom: 10px;"></span>
                
                    <div class="row">

                        <div class="input-field col l4 s12">
                            <i class="material-icons prefix">explicit</i>
                            <select id="cbotc" name="cbotc">
                            
                            </select>
                            <label for="icon_telephone">Comprobante electrónico</label>                        
                        </div>

                        <div class="input-field col l4 s12">
                            <i class="material-icons prefix">business</i>
                            <input id="numerocomp" type="text" value="0001-0000000" readonly>
                            <label for="numerocomp">Número de comprobante</label>
                        </div>

                        <div class="input-field col l2 s12">
                            <!-- <i class="material-icons prefix">explicit</i> -->
                            <select id="cboec" name="cboec">
                            
                            </select>                        
                            <label for="icon_telephone">Estado de comprobante</label>
                        </div>

                        <div class="input-field col l2 s12">
                            <!-- <i class="material-icons prefix">explicit</i> -->
                            <select id="cbotcob" name="cbotcob">
                            
                            </select>                        
                            <label for="icon_telephone">Tipo de cobro</label>
                        </div>

                        <!-- &#x1F50E; -->
                        <div class="input-field col l4 s12">
                            <i class="material-icons prefix">business</i>
                            <input id="codigo" name="codigo" type="text" value="" placeholder="Busqueda por código &#x1F50D;">
                            <label for="codigo">Código de cliente</label>
                        </div>

                        <div class="input-field col l8 s12">
                            <i class="material-icons prefix">business</i>
                            <input id="nombres3" name="nombres3" type="text" value="" placeholder="Busqueda por nombre &#x1F50D;">
                            <label for="nombres">Nombre de cliente</label>
                        </div>

                        <div class="input-field col l8 s12">
                            <i class="material-icons prefix">business</i>
                            <input id="dni" type="text" value="" placeholder="Documento de identidad">
                            <label for="dni">DNI / RUC</label>
                        </div>                    

                        <div class="input-field col l4 s12">
                        <a id="btniniciar" href="#" class="waves-effect waves-light btn" style="width: 100%;background-color: #4CAF50;">Nuevo cliente</a>       
                        </div>

                        

                        <div class="col s12 l12">

                            <table id="detalle" class="highlight responsive-table" style="margin-top: 20px;">
                                    <thead>
                                    <tr style="color: #1b479a;">
                                        <th>ID</th>
                                        <th>Concepto de academia</th>
                                        <th style='width: 60px;'>Cantidad</th>
                                        <th style='width: 80px;text-align: center;'>IGV.</th>
                                        <th style='width: 80px;'>Importe</th>
                                        <th style='width: 250px;'>Observación</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <!-- <tr>
                                        <td>235</td>
                                        <td>ACADEMIA DE ITALIANO</td>
                                        <td>
                                            <input id="icon_telephone" type="number" class="right-align" value="12">
                                        </td> 
                                        <td><input id="icon_telephone" type="text" class="right-align" value="0.00"></td>
                                        <td><input id="icon_telephone" type="text" class="right-align" value="0.00"></td>
                                        <td><input id="icon_telephone" type="text" value=""></td>
                                                                               
                                    </tr> -->
                                    
                                
                                    </tbody>
                            </table>

                                    

                            <table class="highlight">
                                    <thead>
                                        <tr style="color: #1b479a;">
                                            <th></th>
                                            <th></th>
                                            <th style='width: 60px;'></th>
                                            <th style='width: 80px;text-align: center;'></th>
                                            <th style='width: 80px;'></th>
                                            <th style='width: 250px;'></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <span>Total :</span>
                                        </td> 
                                        <td><input id="icon_telephone" type="text" class="right-align" value="0.00"></td>
                                        <td><input id="icon_telephone" type="text" class="right-align" value="0.00"></td>
                                        <td></td>                                                                               
                                        </tr>
                                                                    
                                    </tbody>
                            
                            </table>


                    </div>

                        
                    </div>

                    <div class="row">

                    </div>
                    
                    <br>

                    <div class="row">
                        
                        <div class="col s12 m4 l4">
                            <a id="btnAgregar" href="JavScript:void()" class="waves-effect waves-light btn" style="width: 100%;background-color: white;">
                            <!-- <i class="material-icons left" style="color: white !important;">add</i> -->
                            <span style="color: #4CAF50;">+ Agregar concepto</span>
                            </a>
                            <!-- transform: translate(-120px,0px); <a href="#" class="waves-effect waves-light btn" style="width: 100%;background-color: #4CAF50;">Agregar concepto</a> -->
                        </div>
                        <div class="col s12 m8 l8">
                            <a href="#" class="waves-effect waves-light btn" style="width: 100%;background-color: #4CAF50;">Registrar cobranza</a>
                        </div>
                                             
                    </div>

            </div>

        </div>

        <!-- Fin de card 3 -->