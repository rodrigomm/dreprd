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
              <div class="">
                <!-- <div class="btn-group pull-right"> -->
                <div class="btn-group pull-right">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-download"></i> Descargar <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="report/clients-word.php">Word 2016 (.docx)</a></li>
                  </ul>
                </div>
                <br><br>
                </div>
                <br>
                <form class="form-horizontal" role="form">
                <!-- <input type="hidden" name="view" value="reservations"> -->
                  <div class="form-group">
                    <div class="col-lg-2">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" name="q" value="" class="form-control" placeholder="Código">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-male"></i></span>
                        <select name="pacient_id" class="form-control">
                          <option value="">ACTOS RESOLUTIVOS</option>
                          <option value="2">1 -  </option>
                          <option value="1">2 - </option>
                        </select>
                      </div>
                    </div>
                 
                    <div class="col-lg-4">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="q" value="" class="form-control" placeholder="Beneficiarios">
                      </div>
                    </div>

                  </div>
                  <div class="form-group">

                    <div class="col-md-4">
                      <div data-date-format="mm/dd/yyyy" data-date="13/07/2013" class="input-group input-large">
                        <input type="date" name="from" class="form-control dpd1 datepicker" placeholder="Fecha de inicio">
                        <span class="input-group-addon"> Hasta </span>
                        <input type="date" name="to" class="form-control dpd2 datepicker" placeholder="Fecha de fin">
                      </div>
                      <span class="help-block">Selecione rango</span> 
                    </div>
                  </div> <!-- Form group -->
                  <div class="form-group">
                    <div class="col-lg-2">
                      <button class="btn btn-primary btn-block">Buscar</button>
                    </div>
                  </div>
                </form>
                    <p class="alert alert-success">Se realizó la búsqueda</p>
                    <p class="alert alert-danger">No se encontraron</p>
              </div>
            </div><!--/porlets-content--> 
          </div>
      </div><!-- /#page-wrapper -->
    <!-- JavaScript -->
<?php 
	include_once "footer.php";
 ?>