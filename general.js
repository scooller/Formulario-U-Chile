function initialize() {
	var options = {
		types: ['(cities)'],
		componentRestrictions: {country: "cl"}
	};

	var input = document.getElementById('city');
	var autocomplete = new google.maps.places.Autocomplete(input, options);
}
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
});