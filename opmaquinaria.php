<!-- contenido oculto de  materiales-->
<div id="cuatro" style="display:none">

                                <div class="form-group">
    
                                    <label class="title text">Maquinaria</label>

                                        <select name="1tru" class="form-group">
                                        <option style="display:none">---------</option>
                                         <?php
                                            include("conecta.php");
                                            $collection = $client->$bd->trucking;

                                            if ($collection->count()>0)
                                               {
                                                 $documentos = $collection->find();
                                                 foreach ($documentos as $documento)  
                                                    
                                                      echo '<option  value="'.$documento["trunombre"].'">'.$documento["trunombre"].'</option>';
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
                                        <input type="number" minlength="1" class="form" name="t1hrs" id="inputZip" placeholder="Cantidad en (Hrs)"
                                       >

                                    </div>
                                    <div class="form-group col-md">
    
                                        <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                        <input type="number" minlength="1" class="form" name="t2hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                    </div>

                                        <dl>
                                            <dt><label>Agregar otra Maquinaria</label></dt>
                                                <dd>
                                                <input  type="radio" name="tipo_attach" onclick="maquinaria(this)" value="c">si<br>
                                                <input type="radio"  name="tipo_attach" onclick="maquinaria(this)" value="d" >no<br>
          
                                                </dd>
                                        </dl>

                                          <!-- contenido oculto de  materiales-->
                                        <div id="cinco" style="display:none">
                            

                                            <div class="form-group">

                                                <label class="title text">Maquinaria</label>

                                                    <select name="2tru" class="form-group">
                                                       <option style="display:none">---------</option>
                                              <?php
                                                        include("conecta.php");

                                                        $collection = $client->$bd->trucking;

                                                        if ($collection->count()>0)
                                                            {
                                                             $documentos = $collection->find();
                                                             foreach ($documentos as $documento)  
                                                
                                                             echo '<option  value="'.$documento["trunombre"].'">'.$documento["trunombre"].'</option>';
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
                                             <input type="number" minlength="1" class="form" name="t3hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                             </div>
                                             <div class="form-group col-md">

                                              <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                              <input type="number" minlength="1" class="form" name="t4hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                            </div>

                                            <dl>
                                            <dt><label>Agregar otra Maquinaria</label></dt>
                                                <dd>
                                                <input  type="radio" name="tipo_attach" onclick="maquinaria(this)" value="e">si<br>
                                                <input type="radio"  name="tipo_attach" onclick="maquinaria(this)" value="f" >no<br>
          
                                                </dd>
                                        </dl>

                                          <!-- contenido oculto de  materiales-->
                                        <div id="seis" style="display:none">
                            

                                            <div class="form-group">

                                                <label class="title text">Maquinaria</label>

                                                    <select name="3tru" class="form-group">
                                                       <option style="display:none">---------</option>
                                              <?php
                                                        include("conecta.php");
                                                        $collection = $client->$bd->trucking;

                                                        if ($collection->count()>0)
                                                            {
                                                             $documentos = $collection->find();
                                                             foreach ($documentos as $documento)  
                                                
                                                             echo '<option  value="'.$documento["trunombre"].'">'.$documento["trunombre"].'</option>';
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
                                             <input type="number" minlength="1" class="form" name="t5hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                             </div>
                                             <div class="form-group col-md">

                                              <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                              <input type="number" minlength="1" class="form" name="t6hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                            </div>
                                            </div>
                                           <br>
                                           <br>
                                </div>
