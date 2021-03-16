<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Stephen's|portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/js" href="<?php echo asset('js/jquery-3.5.1.min.js');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('main.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/js" href=" <?php echo asset('js/bootstrap.bundle.js');?>">
	<link rel="preconnect" href="<?php echo asset('https://fonts.gstatic.com');?>">
	<link href="<?php echo asset('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');?>"> 
	<link rel="stylesheet"  href="<?php echo asset('icons/css/all.css');?>">
	
</head>
<body>

	<div class="container-fluid">
		<!--header-->
		<div class="row">
			<div class="header col ">
				<div class="overlay container-fluid">
					<!--nav-->
					<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:rgba(0,0,0,0); ">
						 <div class="container-fluid">
						    <a class="navbar-brand font-weight-bold" href="<?php echo route('index');?>">STEPH-CODES</a>
						    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						      <span class="navbar-toggler-icon"></span>
						    </button>
						    <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
						      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						        	<li class="nav-item">
						          	<a class="nav-link px-4 ml-5 margin-left active" aria-current="page" href="<?php echo url('/');?>">Home</a>
						        	</li>
						        	<li class="nav-item">
						          	<a class="nav-link px-4 text-white" href="#about">About</a>
						        	</li>
						        	<li class="nav-item">
						          	<a class="nav-link px-4 text-white" href="#portfolio">Portfolio</a>
						        	</li>
									<li class="nav-item">
									<a class="nav-link px-4 text-white" href="#services">Services</a>
									</li>
						        	<li class="nav-item">
						          	<a class="nav-link mr-4 text-white" href="<?php echo route('contact');?>">Contact</a>
						        	</li>
						      	</ul>

						      	<a href="#"><i class="fab fa-facebook fa-lg  ml-5 margin-left px-3 text-white"></i></a>
							    <a href="#"><i class="fab fa-twitter fa-lg px-3 text-white"></i></a>
							    <a href="#"><i class="fab fa-linkedin fa-lg px-3 text-white"></i></a>
							    <a href="#"><i class="fab fa-instagram fa-lg px-3 text-light"></i></a>
								<a href="#"><i class="fab fa-github fa-lg px-3 text-light"></i></a>
							    <!--<a href="#"><i class="fab fa-instagram fa-5x px-3 text-danger"></i></a>-->
						 </div>
					</nav>
					<div class="col-12  bg-head">
						<h1 class="ml-5 display-5">I AM OGUNDELE B. STEPHEN</h1>
						<h3 class="margin-left bg-text ml-5">A full stack developer</h3>
						<p></p>
						<button class="btn border-light text-center btn-download text-white margin-left ml-5">HIRE ME</button>
						<button class="btn btn-outline-light text-center margin-left">DOWNLOAD CV</button>
					</div>
				</div>	
			</div>
		</div>

		<!-- about-->
		<div id="about" class="mt-3 bg-light mb-4">
			<div class="container-fluid bg-about bg-light text-dark mt-3">
				<div class="container">
					<div class="row ml-5 mr-5  mb-4">
						<div class=" col-3  col-md-3 mt-5 mr-5">
							<img src="<?php echo asset('images/smile.jpg');?>" class="col border-dark border-img mt-5">
						</div>
						<div id="about" class="col col-md-7 ml-5 mt-3  ">
							<h3 class="ml-5 pl-5 pb-1 display-4 font-weight-light ">About</h3>
							<hr class="text-center m-auto ">
							<p class="text-justify col">My name is Ogundele Stephen Babatunde and I am a full-stack <b>PHP</b>
								Developer  currently living in lagos, Nigeria. In my free time,
								I study human computer interface and the psychology of human computer interaction. I am both driven and self-motivated, and I am constantly experimenting with new technologies and techniques. I am very passionate about Web Development,
								and strive to better myself as a developer, and the development community as a whole.<br>
								contact: <b>07032519605</b> or send an email:<b>ogundele370@gmail.com</b></p>
								
								<button class="btn btn-outline-dark border-dark mb-4 btn">Hire me</button>
								<button class="btn btn-download ml-3 text-white mb-4">Download CV</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<div id ="portfolio" class="container-fluid mt-1 pt-0"><!--portfolio-->
			<div class=" container  serv-bg">
				<h3 class="text-center ml-5 pb-5 pt-5 display-4 text-light font-weight-light">Portfolio</h3>
				<hr class="text-center line">
			</div>
			<div class=" container portfolio mb-5 pt-0 mt-3">
				<div class="row pt-5 mb-5 justify-content-center">
					<div class="card ml-4 " style="width: 22rem;">
						<img class="card-img-top card-border" src="<?php echo asset('images/2.png');?>" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Auto-mechanic app</h5>
						
						</div>
					</div>
					<div class="card  ml-4" style="width: 22rem;">
						<img class="card-img-top card-border" src="<?php echo asset('images/3.png');?>" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Consultancy firm</h5>
						<!-- <p class="card-text">with this app you get your car fixed by placing an order</p> -->
						
						</div>
					</div>
					<div class="card ml-4 " style="width: 22rem;">
						<img class="card-img-top card-border" src="<?php echo asset('images/4.png');?>" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">E-commerce </h5>
						
						</div>
					</div>
					<div class="card  ml-4 mt-4" style="width: 22rem;">
						<img class="card-img-top card-border" src="<?php echo asset('images/5.png');?>" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">School app</h5>
						
						
						</div>
					</div>
					<div class="card  ml-4  mt-4" style="width: 22rem;">
						<img class="card-img-top card-border" src="<?php echo asset('images/1.png');?>" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Bank app</h5>
						
						
						</div>
					</div>
					<div class="card  ml-4 mt-4" style="width: 22rem;">
						<img class="card-img-top card-border" src="<?php echo asset('images/12.png');?>" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Microfinance bank</h5>
						
						</div>
					</div>
				</div>
			</div>
			
		</div>
			
		<div id="services"class="container  ">
			<div class="col container portfolio">
				<h3 class="text-center ml-5 pb-5 pt-5 display-4 font-weight-light">Services</h3>
				<!-- <hr class="text-center line"> -->
			</div>
			<div class="container serv-bg">
				<div class="row">
					<div class="col col-md-3 mt-5 ml-5 mb-5 bg-light">
						<img src="<?php echo asset('images/htmll.png');?>" class=" ml-5 pl-4 mt-2" height="70">
						<h4 class="mt-3 mb-3 ml-3">Front-end /GUI</h4>
						<p class="text-justify">I proficiently use  html,css, and js
							 in creating a user friendly web pages.
							bootstrap framework and jquery library
							 are also adopted for user experience.
						</p>
					</div>
					<div class="col col-md-3 mt-5 pr-2 mx-auto mb-5 bg-light">
						<img src="<?php echo asset('images/sql.png');?>" class="ml-5 mt-2" height="70">
						<h4 class="mt-3 mb-3">Database management</h4>
						<p class="text-justify">
							with ample understanding of SQL, ORM, and ERD, using tools like MYSQL workbench,
							Heidi SQL, phpmyadmin. i can efficiently structure, secure, and manage a database.  
						</p>
						
					</div>
					<div class="col col-md-3 mt-5 mr-5 mb-5 bg-light">
						<img src="<?php echo asset('images/php.png');?>" class="ml-5 mt-2" height="100">
						<h4 class=" mb-3">Server side/ Back end</h4>
						<p class="text-justify">
						As a PHP developer with adequate understanding of object oriented programming(OOP),
						SOLID principles,etc i have been able to integrate interactivity between
						 the front-end, database and the backend of a web application.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="contact" class="container ">
			<div class="col container portfolio">
				<h3 class="text-center ml-5 pb-5 pt-5 display-4 font-weight-light">Contact</h3>
			</div>
			<div class="row mt-5">
				<div class="col col-md-6 ">
					<h3 class="font-weight-light">Subscribe to my Newsletter</h3>
					<form  action="<?php echo url('/submit');?>" class="mb-5" method="POST">
						<label>Name*</label>
						@csrf 
						<input type="text" name="fullname" value="<?php echo old('fullname');?>" class="form-control">
						<label>Email*</label>
						
						<input type="email" name="email" value="<?php echo old('email');?>"class="form-control">
						<button class="form-control btn btn-download mt-3 text-light"type="submit" name="submit" value="">SEND</button>

					</form>
				</div>
				<div class="col col-md-5 mb-5">
				<iframe  style="border:4px solid #131114;"
				src="<?php echo asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.127405140736!2d3.3859308986926115!3d6.63109440345571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b930cda3ce91d%3A0x10076e8188d521cb!2s7%20Gbelegbo%20St%2C%20Olowora%2C%20Omu!5e0!3m2!1sen!2sng!4v1615051626780!5m2!1sen!2sng');?>"
				 class="ml-5" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				
			</div>
		</div>

		<div>
		</div>

		<!--footer dark-->
		<div class="row">
			<div class=" col footer p-5  text-white ">
				<p class="p-3 ml-5 text-center mr-5">&copy2021 copyright Ogundele Babatunde Stephen </p>
			</div>
		</div>
		<footer class="text-center text-white mx-0 " style="background-color: #f1f1f1;">
			<!-- Grid container -->
			<div class="container-fluid py-5 ">
			  <!-- Section: Social media -->
			  <section class="">
				<!-- Facebook -->
				<a
				  class="btn btn-link btn-floating btn-lg text-dark m-1"
				  href="#!"
				  role="button"
				  data-mdb-ripple-color="dark"
				  ><i class="fab fa-facebook-f"></i
				></a>
		  
				<!-- Twitter -->
				<a
				  class="btn btn-link btn-floating btn-lg text-dark m-1"
				  href="#!"
				  role="button"
				  data-mdb-ripple-color="dark"
				  ><i class="fab fa-twitter"></i
				></a>
		  
				<!-- Google -->
				<a
				  class="btn btn-link btn-floating btn-lg text-dark m-1"
				  href="#!"
				  role="button"
				  data-mdb-ripple-color="dark"
				  ><i class="fab fa-google"></i
				></a>
		  
				<!-- Instagram -->
				<a
				  class="btn btn-link btn-floating btn-lg text-dark m-1"
				  href="#!"
				  role="button"
				  data-mdb-ripple-color="dark"
				  ><i class="fab fa-instagram"></i
				></a>
		  
				<!-- Linkedin -->
				<a
				  class="btn btn-link btn-floating btn-lg text-dark m-1"
				  href="#!"
				  role="button"
				  data-mdb-ripple-color="dark"
				  ><i class="fab fa-linkedin"></i
				></a>
				<!-- Github -->
				<a
				  class="btn btn-link btn-floating btn-lg text-dark m-1"
				  href="#!"
				  role="button"
				  data-mdb-ripple-color="dark"
				  ><i class="fab fa-github"></i
				></a>
			  </section>
			  <!-- Section: Social media -->
			</div>  
			<!-- Copyright -->
			
		  </footer>
			
	</div>
</body>
</html>