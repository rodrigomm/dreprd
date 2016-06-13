$(document).ready(function($) {
	$('.datepicker').datepicker({
        language: "es",
        format : "yyyy-mm-dd"
    });

	// Load Descrip RDs
    $('[name=rdrActo]').html('<option></option>');
    $.get('core/getActo.php', function(data) {     
            $.each(JSON.parse(data), function(idx, obj) {
                // console.log(obj.Nombre);
                $("#rdrListaActo").append('<option value="' + obj.id_acto + '">' + obj.descrip_acto + '</option>');
            });
    });
});