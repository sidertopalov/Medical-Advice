<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>{{title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="/../css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/theme.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/../css/bootstrap-editable.css" type="text/css" rel="stylesheet" media="all"/>
        <link href="/../css/passwordStrength.css" type="text/css" rel="stylesheet" media="all"/>

        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="/../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
			<nav class="centered-logo top-bar">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<span class="alt-font"><i class="icon icon_pin"></i> 300 Collins St Melbourne</span>
								<span class="alt-font"><i class="icon icon_mail"></i> example@gmail.com</span>
							
								
								<ul class="social-icons text-right">
									
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
							
									<li>
										<a href="#">
											<i class="icon social_dribbble"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1> Medical Advice </h1>
						</div>
					</div>
				
				
					<div class="row nav-menu">
					
						<div class="col-sm-12 columns text-center">
							<ul class="menu">
								<li> <a href="/">Home</a></li>								

								{% if session.isLogged == true %}
									<li><a href="/account">Profile</a></li>
									<li><a href="/article">New Question</a></li>
									<li><a href="/categorySelect">Categories</a></li>
						        	<li class="has-dropdown"><a href="#">Settings</a>
						        		<ul class="subnav">
						        			<a href="/changePass">Change Password</a>
						        			<a href="/logout">Logout</a>
					        			</ul>
					        		</li>
						        	<li></li>

						        	{% if session.isAdmin == 1 %}

						        	<li class="has-dropdown"><a href="#">Admin Panel</a>
						        		<ul class="subnav">
						        			<a href="/category">Create Category</a>
						        			<a href="/categoryList">Categories List</a>
						        			<a href="/articleList">Articles List</a>
					        			</ul>
					        		</li>

					        		{% endif %}

					        	{% else %}

						        	<li> <a href="/signup">Sign Up</a></li>
									<li> <a href="/login">Login</a></li>

						        {% endif %}
						        								
							</ul>
		
						</div>
					</div>
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div>
				<div class="bottom-border"></div>
			</nav>
		
		</div>
		
		<div class="main-container">

			