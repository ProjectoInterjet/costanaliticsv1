    <!-- contenido oculto de  materiales-->
    <div id="uno" style="display:none">

                                <div class="form-group">
    
                                    <label class="title text">Materiales</label>

                                        <select name="1mate" class="form-group">
                                        <option style="display:none">---------</option>
                                         <?php
                                            include("conecta.php");
                                            $collection = $client->$bd->materials;

                                            if ($collection->count()>0)
                                               {
                                                 $documentos = $collection->find();
                                                 foreach ($documentos as $documento)  
                                                    
                                                      echo '<option  value="'.$documento["matnombre"].'">'.$documento["matnombre"].'</option>';
                                                    {  
                                         ?>
                           
                                        </select>
  
                                         <?php
                                                    }
                                                }else{
                                         ?>
                                                    <option>Sin registros</option>
                                          <?php } ?>
                                 </div>
                         
                                    <br>

                                    <div class="form-group col-md">
    
                                        <label class="title text">Selecciona el precio de cobro por Hora </label>
                                        <input type="number" minlength="1" class="form" name="m1hrs" id="inputZip" placeholder="Cantidad en (Hrs)"
                                       >

                                    </div>
                                    <div class="form-group col-md">
    
                                        <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                        <input type="number" minlength="1" class="form" name="m2hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                    </div>

                                        <dl>
                                            <dt><label>Agregar otro Material</label></dt>
                                                <dd>
                                                <input  type="radio" name="tipo_attach" onclick="material(this)" value="c">si<br>
                                                <input type="radio"  name="tipo_attach" onclick="material(this)" value="d" >no<br>
          
                                                </dd>
                                        </dl>

                                          <!-- contenido oculto de  materiales-->
                                        <div id="dos" style="display:none">
                            

                                            <div class="form-group">

                                                <label class="title text">Materiales</label>

                                                    <select name="2mate" class="form-group">
                                                       <option style="display:none">---------</option>
                                              <?php
                                                       include("conecta.php");
                                                       $collection = $client->$bd->materials;
                                                        if ($collection->count()>0)
                                                            {
                                                             $documentos = $collection->find();
                                                             foreach ($documentos as $documento)  
                                                
                                                             echo '<option  value="'.$documento["matnombre"].'">'.$documento["matnombre"].'</option>';
                                                             {  
                                              ?>
                       
                                                    </select>

                                              <?php
                                                             }
                                                             }else{
                                              ?>
                                                    <option>Sin registros</option>
                                               <?php } ?>
                                            </div>
                     
                                            <br>

                                            <div class="form-group col-md">

                                             <label class="title text">Selecciona el precio de cobro por Hora </label>
                                             <input type="number" minlength="1" class="form" name="m3hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                             </div>
                                             <div class="form-group col-md">

                                              <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                              <input type="number" minlength="1" class="form" name="m4hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                            </div>

                                            <dl>
                                            <dt><label>Agregar otro Material</label></dt>
                                                <dd>
                                                <input  type="radio" name="tipo_attach" onclick="material(this)" value="e">si<br>
                                                <input type="radio"  name="tipo_attach" onclick="material(this)" value="f" >no<br>
          
                                                </dd>
                                        </dl>

                                          <!-- contenido oculto de  materiales-->
                                        <div id="tres" style="display:none">
                            

                                            <div class="form-group">

                                                <label class="title text">Materiales</label>

                                                    <select name="3mate" class="form-group">
                                                       <option style="display:none">---------</option>
                                              <?php
                                                       include("conecta.php");
                                                       $collection = $client->$bd->materials;
                                                        if ($collection->count()>0)
                                                            {
                                                             $documentos = $collection->find();
                                                             foreach ($documentos as $documento)  
                                                
                                                             echo '<option  value="'.$documento["matnombre"].'">'.$documento["matnombre"].'</option>';
                                                             {  
                                              ?>
                       
                                                    </select>

                                              <?php
                                                             }
                                                             }else{
                                              ?>
                                                    <option>Sin registros</option>
                                               <?php } ?>
                                            </div>
                     
                                            <br>

                                            <div class="form-group col-md">

                                             <label class="title text">Selecciona el precio de cobro por Hora </label>
                                             <input type="number" minlength="1" class="form" name="m5hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                             </div>
                                             <div class="form-group col-md">

                                              <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                              <input type="number" minlength="1" class="form" name="m6hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                            </div>
                                            </div>
                                           <br>
                                           <br>
                                </div>
