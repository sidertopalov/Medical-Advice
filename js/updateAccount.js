$("#updateAccount").submit(function(e){
	var url = "/KinguinInternship/myProject/ajax/updateMyAccount";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#updateAccount").serialize(),
		dataType: "json",
		success: function(data){
			
			alert(data.message);
		}
	});

	e.preventDefault();
});