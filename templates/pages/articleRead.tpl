{% include "./common/header.tpl" %}


<section>
	
	<div class="container">

		<div class="text-center">
				<h2>Read Comment</h2>
		</div>
		<hr style="border-color: #e74c3c;">
		<br>

		{% for comment in articleDetails  %}

			<section>
				<div class="container table col-md-12 col-sm-12 text-center" >

				<div class="col-md-2 col-sm-2">
					
				</div>
					<div class="col-md-8 col-sm-8 text-center">
						<div>
				        	<h3>
					        	Title:<b>{{comment.title}}</b>
				        	</h3>
				        </div>
						<div class="row">
					        <b>Author:</b><b style="color: #e74c3c">{{comment.author_id}}</b>
				        </div>
				        <div class="row">
				        	<p style="color:green;" >Category:{{comment.category_id}}</p>
				        </div>
				        <br>
				        <div>
				        	<hr style="border-color: #000">
					        	<div >{{ comment.content | raw }}</div>
					       	<hr style="border-color: #000">
					       	<div><b>Date: {{comment.date}}</b></div>
				       	</div>
			        </div>
		        </div>

		        <div class="col-md-2 col-sm-2">
					
				</div>
	        </section>

        {% endfor %}

	</div>


</section>


{% include "./common/footer.tpl" %}