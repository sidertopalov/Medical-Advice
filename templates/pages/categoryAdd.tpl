{% include "./common/header.tpl" %}


<section>
	
	<div class="container">

		<div class="text-center">
				<h2>Add New Category</h2>
		</div>
		<hr style="border-color: #e74c3c;">
		<br>
		
		<div style="display:none" class="alert alert-danger" role="alert" id="errorMessage"></div>
		<div style="display:none" class="alert alert-success" role="alert" id="successMessage"></div>

		<div class="table-responsive">

		<form method="post" id="categoryAddForm">
			New category: <input type="text" name="newCategory" id="newCategory" value="" />
			<input id="btnCategory" type="submit" class="btn btn-primary btn-filled"  value="Add Category" />
		</form>

		</div>

	</div>


</section>


{% include "./common/footer.tpl" %}