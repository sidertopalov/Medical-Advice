				
				</div><!--end main-->
		
		<div class="footer-container">
		
		
			<footer class="short bg-secondary-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-10">
							<span class="sub">© Copright 2014 Medium Rare</span>
							<ul>
								<li><a href="#">Terms Of Use</a></li>
								<li><a href="#">Privacy &amp; Security Statement</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
						
						<div class="col-sm-2 text-right">
							<ul class="social-icons">
								<li>
									<a href="#">
										<i class="icon social_twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>
							</ul>	
						</div>
					</div>
				</div>
			</footer>
		</div>
				
		<!-- <script src="https://www.youtube.com/iframe_api"></script> -->
		<script src="/../js/jquery.min.js"></script>
        <script src="/../js/jquery.plugin.min.js"></script>
        <script src="/../js/bootstrap.min.js"></script>
        <script src="/../js/jquery.flexslider-min.js"></script>
        <script src="/../js/smooth-scroll.min.js"></script>
        <script src="/../js/skrollr.min.js"></script>
        <script src="/../js/spectragram.min.js"></script>
        <script src="/../js/scrollReveal.min.js"></script>
        <script src="/../js/isotope.min.js"></script>
        <script src="/../js/twitterFetcher_v10_min.js"></script>
        <script src="/../js/lightbox.min.js"></script>
        <script src="/../js/jquery.countdown.min.js"></script>
        <script src="/../js/scripts.js"></script>
        <script src="/../js/bootstrap-editable.js"></script>
        <script src="/../js/passwordStrength.jquery.js"></script>
        <script src="/../js/passwordStrength.jquery.min.js"></script>
        <script src="/../js/jquery.tinymce.min.js"></script>
        <script type="text/javascript" src='//cdn.tinymce.com/4/tinymce.min.js'></script>

        {% if javascript is empty %}
    		<!-- <p>Our website is in maintenance mode. Please, come back later.</p> -->
		{% else %}
	        {% for js in javascript  %}
	        	<script src="{{js}}"></script>
	        {% endfor %}
        {% endif %}
    </body>
</html>