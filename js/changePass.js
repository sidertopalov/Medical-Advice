$("#changePass").submit(function(e){
	var url = "/KinguinInternship/myProject/ajax/changePassword";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#changePass").serialize(),
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


//	passwordStrength.js
$("#newPass").passwordStrength({
    targetDiv:'passwordStrength',
    text:{
        year:'year|years',          
    },
}, 	
	
	// function() {
	// 	$("#pStrinput").val($("#percentage").text());
	// }
);

// pStrength.js
// $('#userPass').pStrength({
//         'changeBackground'          : false,
//         'onPasswordStrengthChanged' : function(passwordStrength, strengthPercentage) {
//             if ($(this).val()) {
//                 $.fn.pStrength('changeBackground', $(this), passwordStrength);
//             } else {
//                 $.fn.pStrength('resetStyle', $(this));
//             }
//             $('#' + $(this).data('display'))
//                 .html('Your password strength is ' + strengthPercentage + '%');
//         },
//         'onValidatePassword': function(strengthPercentage) {
//             $('#' + $(this).data('display')).html(
//                 $('#' + $(this).data('display')).html() + ' Great, now you can continue to register!'
//             );

//             $('#myForm').submit(function(){
//                 return true;
//             });
//         }
// });