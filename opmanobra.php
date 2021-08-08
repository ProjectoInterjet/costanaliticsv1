<!-- contenido oculto de  materiales-->
<div id="siete" style="display:none">
                                
    
                                <div class="form-group">
    
                                    <label class="title text">Mano de Obra</label>

                                        <select name="1manobra" class="form-group">
                                        <option style="display:none">---------</option>
                                         <?php
                                           include("conecta.php");
                                            $collection = $client->$bd->manobra;

                                            if ($collection->count()>0)
                                               {
                                                 $documentos = $collection->find();
                                                 foreach ($documentos as $documento)  
                                                    
                                                      echo '<option  value="'.$documento["mobranombre"].'">'.$documento["mobranombre"].'</option>';
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
                                        <input type="number" minlength="1" class="form" name="mo1hrs" id="inputZip" placeholder="Cantidad en (Hrs)"
                                       >

                                    </div>
                                    <div class="form-group col-md">
    
                                        <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                        <input type="number" minlength="1" class="form" name="mo2hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                    </div>

                                        <dl>
                                            <dt><label>Agregar otra Mano de Obra</label></dt>
                                                <dd>
                                                <input  type="radio" name="tipo_attach" onclick="manodeobra(this)" value="c">si<br>
                                                <input type="radio"  name="tipo_attach" onclick="manodeobra(this)" value="d" >no<br>
          
                                                </dd>
                                        </dl>

                                          <!-- contenido oculto de  materiales-->
                                        <div id="ocho" style="display:none">
                            

                                            <div class="form-group">

                                                <label class="title text">Mano de Obra</label>

                                                    <select name="2manobra" class="form-group">
                                                       <option style="display:none">---------</option>
                                              <?php
                                                       include("conecta.php");
                                                        $collection = $client->$bd->manobra;

                                                        if ($collection->count()>0)
                                                            {
                                                             $documentos = $collection->find();
                                                             foreach ($documentos as $documento)  
                                                
                                                             echo '<option  value="'.$documento["mobranombre"].'">'.$documento["mobranombre"].'</option>';
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
                                             <input type="number" minlength="1" class="form" name="mo3hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                             </div>
                                             <div class="form-group col-md">

                                              <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                              <input type="number" minlength="1" class="form" name="mo4hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                            </div>

                                            <dl>
                                            <dt><label>Agregar otra Mano de Obra</label></dt>
                                                <dd>
                                                <input  type="radio" name="tipo_attach" onclick="manodeobra(this)" value="e">si<br>
                                                <input type="radio"  name="tipo_attach" onclick="manodeobra(this)" value="f" >no<br>
          
                                                </dd>
                                        </dl>

                                          <!-- contenido oculto de  materiales-->
                                        <div id="nueve" style="display:none">
                            

                                            <div class="form-group">

                                                <label class="title text">Mano de Obra</label>

                                                    <select name="3manobra" class="form-group">
                                                       <option style="display:none">---------</option>
                                              <?php
                                                       include("conecta.php");
                                                        $collection = $client->$bd->manobra;

                                                        if ($collection->count()>0)
                                                            {
                                                             $documentos = $collection->find();
                                                             foreach ($documentos as $documento)  
                                                
                                                             echo '<option  value="'.$documento["mobranombre"].'">'.$documento["mobranombre"].'</option>';
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
                                             <input type="number" minlength="1" class="form" name="mo5hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                             </div>
                                             <div class="form-group col-md">

                                              <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                              <input type="number" minlength="1" class="form" name="mo6hrs" id="inputZip" placeholder="Cantidad en (Hrs)">

                                            </div>
                                            </div>
                                           <br>
                                           <br>
                                </div>
