{% include "./common/header.tpl" %}


<section>
	
	<div class="container">

		<div class="text-center">
				<h2>List of Questions</h2>
		</div>
		<hr style="border-color: #e74c3c;">
		<br>
		<div class="table-responsive">


			<!-- <table class="table table-striped">
				<thead>
			      <tr>
			      	<th>ID</th>
			        <th>Author</th>
			        <th>Article Name</th>
			        <th>Category ID</th>
			        <th>Content</th>
			      </tr>
	    		</thead>

	    		<tbody>
	    	
			        {% for comments in commentDetails  %}
			        	<tr>
					        <td>{{comments.id}}</td>
					        <td>{{comments.author_id}}</td>
					        <td>{{comments.title}}</td>
					        <td>{{comments.category_id}}</td>
					        <td>{{comments.content}}</td>
				      	</tr>
			        {% endfor %}
			      
		      	</tbody>

			</table> -->

		</div>

		{% for comments in commentDetails  %}

			<section>
				<div class="container" >

					<div class="form-table text-center">
						<div>
				        	<h4>
					        	Title:<b>{{comments.title}}</b>
				        	</h4>
				        </div>
						<div class="row">
					        Author:<b style="color: #e74c3c">{{comments.author_id}}</b>
				        </div>
				        <br>
				        <div>
					        <textarea disabled style="width: 60%; height: 200px; resize: none;">{{comments.content}}</textarea>
					       	<div class="pull-right col-sm-7">Date: {{comments.date}}</div>
				       	</div>
			        </div>

		        </div>
	        </section>

        {% endfor %}

	</div>


</section>


{% include "./common/footer.tpl" %}