{% include "./common/header.tpl" %}


<section>
	<div class="container">

			<div class="row text-center">
						
				<div class="col-sm-12 text-center">
					<div class="photo-form-wrapper clearfix">
						<div class="row">

							<div class="col-md-4 col-sm-4">

							</div>

							<form method="post" id="resetPass"> 

								<div class="col-md-4 col-sm-4">

									<h3 style="text-decoration: underline;"> New Password </h3>
									<hr style="border-color: #e74c3c;">

									<div style="display:none" class="alert alert-danger" role="alert" id="errorMessage"></div>
									<div style="display:none" class="alert alert-success" role="alert" id="successMessage"></div>

									<input id="newPass" name="newPass" type="password" placeholder="New Password" value="">
								
									<input id="passConf" name="passConf" type="password" placeholder="Confirm Password" value="">

									<input id="btnSaveChanges" type="submit" class="btn btn-primary btn-filled"  value="Submit">
								</div>

							</form>

							<div class="col-md-4 col-sm-4">

							</div>

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