$("#resetPass").submit(function(e){
	var url = "/ajax/reset-password";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#resetPass").serialize(),
		dataType: "json",
		success: function(data){
			if (data.error == false ) {
				
				$('#successMessage').hide();
				$('#errorMessage').html( data.message ).fadeTo(1,1000);
			} else {
				$('#errorMessage').hide();
				$('#newPass').hide();
				$('#passConf').hide();
				$('#successMessage').html( data.message ).fadeTo(1,1000);
			}
		}
	});

	e.preventDefault();
});