$(document).ready(function(e) {
	// Load DatePicker
	$('#datepicker').datepicker({
		orientation: 'bottom',
        language: "es",
        // format : "yyyy-mm-dd",
        format : "dd-mm-yyyy",
        autoclose: true
    });
	// Fix the position top
    $("#datepicker").datepicker().on("show", function(e) {
		var top = $("#organization-header").height() + parseInt($(".datepicker").css("top"));
  		$(".datepicker").css("top", 163);
	});
	// 
    $("#rdrNum").change(function(event) {
		$("#nomFile").val($("#rdrNum").val() + $("#rdrAnio").val());
	});
	//RTYGWGSJDVJANVAVJN
	$("#rdrAnio").change(function(event) {
		$("#nomFile").val($("#rdrNum").val() + $("#rdrAnio").val());
	});
	//
    $("#datepicker").datepicker().on('change keyup paste', function(event) {
    	// var anio = $("#datepicker").val().split("-",4);
    	var anio = $("#datepicker").val().split("-");
    	// console.log(anio);
		var rdNum = $("#rdrNum").val();
		$("#rdrAnio").val("-"+anio[2]);
    	$("#nomFile").val($("#rdrNum").val() + "-"+anio[2]);
    });
    //Mascara
    $("#rdrAnio").mask("-9999");
    $("#datepicker").mask("99-99-9999");

	// Load Descrip RDs
    $('[name=rdrActo]').html('<option></option>');
    $.get('core/modules/getAR.php', function(data) {     
            $.each(JSON.parse(data), function(idx, obj) {
                // console.log(obj.Nombre);
                $("#rdrListaActo").append('<option value="' + obj.id_acto + '">' + obj.descrip_acto + '</option>');
            });
    });
    //Si se quiere cambiar nombre
	$("#changeName").on('change', function(event) {
		event.preventDefault();
		/* Act on the event */
		if ($('#changeName:checked').val() == "on") {
			$("#nomFile").attr("disabled", true);
			// console.log("Descheckeado");
		}else{
			$("#nomFile").attr("disabled", false);
			$("#nomFile").attr("required", true);
			// console.log("Checkeado");
		}
	});
	//If send form
	$("#uploadFile").on('submit', function(event) {
		event.preventDefault();
		$("#mensaje").empty();
		$("#load").show();
		/* Conexion AJAX*/
		$.ajax({
			url: 'saverd.php',
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function (data){
				$("#load").hide();
				$("#mensaje").html(data);
			}
		})
		.done(function() {
			console.log("success");
			$('#uploadFile')[0].reset();
			$("#previewing").attr('src', 'noimage.png');
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		

	});
});

$(function() {
	$("#file").change(function(event) {
		/* Act on the event */
		var reader = new FileReader();
		reader.onload = imageIsLoaded;
		reader.readAsDataURL(this.files[0]);
	});
});

function imageIsLoaded(e){
	$("#previewing").attr('src', e.target.result);
	$("#previewing").attr('with', '250px');
	$("#previewing").attr('height', '230px');
}
