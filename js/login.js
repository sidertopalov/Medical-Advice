
$("#loginForm").submit(function(e){

	var url = "/KinguinInternship/myProject/ajax/login";
	$.ajax({
		type: "POST",
		url: url,
		data: $("#loginForm").serialize(),
		dataType: "json",
		success: function(data)
		{
			alert(data.error);
		}
	});
	e.preventDefault();
});




// $( "#loginSubmit" ).click(function() {

// 	var email 	 = $("#loginEmail").val();
// 	var pass  	 = $("#loginPass").val();
// 	var isDataValid = true;

// 	email = $.trim(email);

// 	if(email == "") {
// 	  	$("error").html("Email is empty");
// 		// $("#emailError").css("display","block");
// 		$("#emailError").fadeTo(1500,1);
// 		isDataValid = false;
//   	}

//   	if ( !isEmail(email) ) {

//   		$("#error").html("Email is not valid");
//   		$("#emailError2").fadeTo(1500,1);
//   		isDataValid = false;
//   	}

//   	if ($.trim(pass) == "") {
//   		$("#error").html("Password is empty");
// 		// $("#passError").css("display","block");
// 		$("#error").fadeTo(1500,1);
// 		isDataValid = false;
//   	}

// 	setTimeout(disappear,3500);

//   	// if(isDataValid){
//   	// 	return true;
//   	// }
//   	return false;
// 	function isEmail(email) {

// 			//  "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" 	 --> email address
// 			//  "/[a-zA-Z0-9]+@+[a-zA-Z0-9]+\.[a-zA-Z]+/g"			 --> email address
// 			//  "[a-zA-Z/:]+[a-zA-Z0-9_@]+\.[a-z.]+[a-z]+/g" 		 --> url address
// 	  		var emailRegex = /[a-zA-Z0-9_+.-]+\@[a-zA-Z0-9]+\.[a-zA-Z]+/g;
// 	  		return emailRegex.test(email);
// 	}

// 	function disappear() {

// 		$("#error").fadeTo(1500,0);
// 	}
// });



