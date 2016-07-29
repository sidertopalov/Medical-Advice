{% include "./common/header.tpl" %}


<section>
	
	<div class="container">

		<div class="text-center">
				<h2>Delete Category</h2>
		</div>
		<hr style="border-color: #e74c3c;">
		<br>
		
		<div style="display:none" class="alert alert-danger" role="alert" id="errorMessage"></div>
		<div style="display:none" class="alert alert-success" role="alert" id="successMessage"></div>

		<div class="table-responsive">
		<div class="text-center">

			<form method="post" id="categoryDelete">
				<input hidden type="text" name="categoryId" id="categoryId" value="{{categoryId}}" /><br>
				<h2><div class="text-center text-danger">Are you sure you want to delete?</div></h2><br>
				<input disabled type="text" name="categoryId" id="categoryId" value="{{categoryName}}" /><br><br>
				<input class="btn btn-primary btn-filled" type="submit" name="btnCategorySubmit" id="btnCategorySubmit" value="Delete" />
				<a class="btn btn-primary btn-filled" href="/KinguinInternship/myProject/categoryList">Back to Category</a>

			</form>
		</div>	
		</div>

	</div>


</section>


{% include "./common/footer.tpl" %}