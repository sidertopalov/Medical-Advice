{% include "./common/header.tpl" %}


<section>
	
	<div class="container">

		<div class="text-center">
				<h2>List of Questions</h2>
		</div>
		<hr style="border-color: #e74c3c;">
		<br>
		<div class="table-responsive">
			<table class="table table-striped">
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

			</table>
		</div>
	</div>


</section>


{% include "./common/footer.tpl" %}