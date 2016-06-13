<?php 
  include_once "head.php";
 ?>
      <!-- Contenido -->
      <div id="page-wrapper">
        <div class="block-web">
            <!-- Cabecera del bloque -->
            <div class="block-header">
              <h3 class="content-header">Registrar Nueva Resolución</h3>
              <div class="actions pull-right"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
            </div>
            <!-- Cuerpo del bloque -->
            <div class="block-content">
            <!-- FORMULARIO -->
            <!-- FORMULARIO -->
            <!-- FORMULARIO -->
              <form class="form-horizontal row-border" id="uploadFile" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-3 control-label">N° Resolución Directoral*</label>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input id="rdrNum" name="rdrNum" type="text" class="form-control" required="">
                      <!-- <span id="anioRD" class="input-group-addon">php echo "-".date("Y")</span> -->
                      <input id="rdrAnio" class="input-group-addon form-control"  name="rdrAnio" value="<?php echo "-".date("Y") ?>">
                    </div>
                  </div>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                    <label class="control-label col-md-1" >Fecha*</label>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input name="rdrFecha" class="form-control" id="datepicker" type="text"  required="" placeholder="dd-mm-aaaa" autocomplete="off" data-inputmask="'alias': 'date'">
                      </div>
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Acto resolutivo*</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="rdrActo" id="rdrListaActo" required="">
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Persona*</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="rdrPersona" placeholder="" required="">
                  </div>
                </div>

                <div class="form-group lable-padd">
                    <label class="col-sm-3 control-label">Renombrar: </label>
                    <div class="col-sm-4">
                      <div class="input-group"> 
                        <span class="input-group-addon">
                          <input type="checkbox" id="changeName">
                        </span>
                        <input type="text" class="form-control" placeholder="Nuevo nombre"  name="nomFile" id="nomFile" readonly="readonly" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Examinar* </label> 
                    <div class="col-sm-4 control-label">
                      <input type="file" name="file" id="file" required="">
                    </div>
                  </div>
                  <!-- hidden="true" -->
                  <div class="form-group" id="load" hidden="true">
                    <div class="col-sm-offset-3">
                      <img src="static/imgs/loading.gif" alt="">
                    </div>
                  </div>
                  <div id="mensaje">
                    <p class="alert alert-info">* Campos obligatorios</p>
                  </div>
                  
                  <div class="form-group">
                      <div class="col-sm-2 col-xs-4"></div>
                      <input type="submit" id="btnSave" onclick="" class="btn btn-primary" value="Guardar">
                        <!-- <button type="button" class="btn btn-danger">Cancelar</button> -->
                  </div>
              </form>
            </div><!--/porlets-content--> 
          </div>
      </div><!-- /#page-wrapper -->
<?php 
  include_once "footer.php";
 ?>