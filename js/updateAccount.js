$("#updateAccount").submit(function(e){
	var url = "/KinguinInternship/myProject/ajax/updateMyAccount";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#updateAccount").serialize(),
		dataType: "json",
		success: function(data){
			
			$('#error').html( data.message ).fadeTo(1,1000);
		}
	});

	e.preventDefault();
});