{% include "./common/header.tpl" %}


<section>
	
	<div class="container">


		<div class="row">
		<div>
			<h3>New Category</h3>
			<hr style="border-color: #e74c3c;">
			<br>
		</div>
			<div style="display:none" class="alert alert-danger" role="alert" id="errorMessage"></div>
			<div style="display:none" class="alert alert-success" role="alert" id="successMessage"></div>

			<!-- <div class="table-responsive"> -->

			<form method="post" id="categoryAddForm">
				<input type="text" name="newCategory" id="newCategory" placeholder="New category name.." value="" /><br><br>
				<input id="btnCategory" type="submit" class="btn btn-primary btn-filled"  value="Create Category" />
			</form>

			<!-- </div> -->
		</div>

	</div>


</section>


{% include "./common/footer.tpl" %}