$(function() {
	$("input#rut").rut({
		formatOn: 'keyup',
		minimumLength: 8
	});
	$("input#rut").rut().on('rutInvalido', function(e) {
		$(this).parent('.form-group').removeClass('has-success');
		$(this).parent('.form-group').addClass('has-error');
	}).rut().on('rutValido', function(e, rut, dv) {
		$(this).parent('.form-group').removeClass('has-error');
		$(this).parent('.form-group').addClass('has-success');
	});
	$('select[name="ciudad"]').change(function(event){
		$('select[name="categoria"]').prop( "disabled", false );
		$('select[name="categoria"]').focus();
		$('select[name="horario"]').prop( "disabled", true );
		$('select[name="horario"]').empty();
		$('select[name="horario"]').append('<option disabled selected>¿Elige tu horario?</option>');
	});
	$('select[name="categoria"]').change(function(event){
		var $val=$(this).val();
		var $city=$('select[name="ciudad"]').val();
		
		$('select[name="horario"]').prop( "disabled", true );
		$('select[name="horario"]').empty();
		$('select[name="horario"]').append('<option disabled selected>¿Elige tu horario?</option>');
		$.ajax({
			url: "/index-new.php",
			data: {tramo:$val,ciudad:$city},
			dataType: 'html',
			method: 'GET'
		}).done(function(resp) {			
			console.log(resp);
			$('select[name="horario"]').append(resp);
			$('select[name="horario"]').prop( "disabled", false );
			$('select[name="horario"]').focus();
		});
		/*$('select[name="horario"]').append('<option>9:00</option>');	
		$('select[name="horario"]').prop( "disabled", false );
		$('select[name="horario"]').focus();*/
	});
	
	
});
function initialize() {
	var options = {
		types: ['(cities)'],
		componentRestrictions: {country: "cl"}
	};

	var input = document.getElementById('city');
	var autocomplete = new google.maps.places.Autocomplete(input, options);
}