{% include "./common/header.tpl" %}


<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>My Account</h1>	
			</div>
		</div>

			<div class="row text-center">
						
				<div class="col-sm-12 text-center">
					<div class="photo-form-wrapper clearfix">
						<div class="row">
							<form method="post" action="/KinguinInternship/myProject/ajax/updateMyAccount">
								<div class="col-md-3 col-sm-4">
									<input id="userEmail" name="email" disabled class="form-email" type="text" placeholder="Email Address" value="{{userDetail.email}}">
								</div>

								<div class="col-md-3 col-sm-4">
									<input id="userEmail" name="firstName" class="form-email" type="text" placeholder="First name" value="{{userDetail.first_name}}">
								</div>

								<div class="col-md-3 col-sm-4">
									<input id="userEmail" name="lastName" class="form-email" type="text" placeholder="Last name" value="{{userDetail.last_name}}">
								</div>
					
								<div class="col-md-3 col-sm-4">
									<input id="userPass" name="pass" class="form-password" type="password" placeholder="Password" value="">
								</div>
								
								<div class="col-md-3 col-sm-4">
									<input id="userPassConf" name="passConf" class="form-password2" type="password" placeholder="Confirm Password" value="">
								</div>
								
								<div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center">
									<input id="btnSaveChanges" type="submit" class="btn btn-primary btn-filled"  value="Save Changes">
								</div>
							</form>
						</div>
					</div>
				</div>
			
			</div>

			<div class="col-sm-4  col-xs-6">
			</div>

			<div class="col-sm-4  col-xs-12">
				
			</div>
		</div>
	</div>
</section>

{% include "./common/footer.tpl" %}