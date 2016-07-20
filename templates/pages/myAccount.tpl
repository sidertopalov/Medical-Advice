{% include "./common/header.tpl" %}


<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>My Account</h1>	
			</div>
		</div>
		<div class="row">
	
			<div class="col-sm-4 col-xs-6"> <!-- col-md-3 col-sm-12-->
				<h4>Hello, <b>{{session.username}}</b></h4>

			</div>

			<div class="col-sm-4  col-xs-6">
			</div>

			<div class="col-sm-4  col-xs-12">
				
			</div>
		</div>
	</div>
</section>

{% include "./common/footer.tpl" %}