<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registro de RD</title>
	<link rel="stylesheet" href="static/css/normalize.css">
	<link rel="stylesheet" href="static/css/bootstrap.css">
	<link rel="stylesheet" href="static/css/main.css">

	<script src="static/js/modernizr-2.8.3.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="cont">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Agregar acto resolutivo.</h3>
            </div>

            <div class="porlets-content">

              <form action="#" class="form-horizontal row-border" id="form-acto">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Insertar acto</label>
                  <div class="col-sm-9">
                    <input name="acto" type="text" class="form-control">
                  </div>
                </div><!--/form-group--> 
                
              </form>
				<div class="bottom">
                  <button type="submit" onclick="insertActoRes()" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-default">Cancelar</button>
                </div>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div>
    </div>
	</div>
	<script src="static/js/jquery-2.2.3.min.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
        <script src="static/js/main.js">
	</script>
</body>
</html>