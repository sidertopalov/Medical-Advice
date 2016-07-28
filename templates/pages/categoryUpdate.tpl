{% include "./common/header.tpl" %}


<section>
	
	<div class="container col-md-12 col-sm-12">

		<div class="text-center">
				<h2>Update Category</h2>
		</div>
		<hr style="border-color: #e74c3c;">
		<br>
		
		<div style="display:none" class="alert alert-danger" role="alert" id="errorMessage"></div>
		<div style="display:none" class="alert alert-success" role="alert" id="successMessage"></div>

		<div class="table-responsive">
		<div class="text-center">

			<form method="post" id="categoryUpdate">
				<input hidden type="text" name="categoryId" id="categoryId" value="{{categoryId}}" /><br>
				<input type="text" name="categoryName" id="categoryName" value="{{categoryName}}" /><br><br>
				<input class="btn btn-primary btn-filled" type="submit" name="btnCategorySubmit" id="btnCategorySubmit" value="Update" />
				<a class="btn btn-primary btn-filled" href="/KinguinInternship/myProject/categoryList">Back to Category</a>

			</form>

		</div>
		</div>

	</div>


</section>


{% include "./common/footer.tpl" %}