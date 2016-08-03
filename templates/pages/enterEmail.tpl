{% include "./common/header.tpl" %}


<section class="no-pad login-page fullscreen-element">
		
	<div class="background-image-holder">
		<img class="background-image" alt="Poster Image For Mobiles" src="/img/hero6.jpg">
	</div>

	<div class="container align-vertical">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
				<div class = "col-sm-12 text-center">
					<h4 style="color: rgb(255,255,0);"> {{error}}</h4><br>
				</div>
				<h1 class="text-white">Enter your  email!</h1>
				<div >
					<span style="display:none" class="alert alert-danger" role="alert" id="errorMessage"></span>
					<span style="display:none" class="alert alert-success" role="alert" id="successMessage"></span>
				</div><br>
				<div class="photo-form-wrapper clearfix">
					<form method="post" id="enterEmailForm" >
						<input class="form-email" id="enterEmail" name="enterEmail" type="text" placeholder="Email Address">
					
						<input class="login-btn btn-filled" id="enterEmailSubmit" type="submit" value="Send Email">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>



{% include "./common/footer.tpl" %}
