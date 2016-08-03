$("#enterEmailForm").submit(function(e){
	var url = "/ajax/sendCode";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#enterEmailForm").serialize(),
		dataType: "json",
		success: function(data){
			if (data.error == false ) {
				
				$('#successMessage').hide();
				$('#errorMessage').html( data.message ).fadeTo(1,1000);
			} else {
				$('#errorMessage').hide();
				$('#successMessage').html( data.message ).fadeTo(1,1000);
			}
		}
	});

	e.preventDefault();
});