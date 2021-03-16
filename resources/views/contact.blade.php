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
		
		<div id="contact" class="container ">
			<div class="col container portfolio">
				<h3 class="text-center ml-5 pb-5 pt-5 display-4 font-weight-light">Contact</h3>
			</div>
			<div class="row mt-5">
				<div class="col col-md-6 ">

                    <?php if(!empty($errors->all())){
                        $err=$errors->all();
                        //echo $r
                        echo"<p class='alert alert-danger'>";
                        foreach($err as $val){
                        echo"$val<br>";
                        }
                        echo"</p>";
                    }else{
                        echo "<p class='alert alert-success'>";
                        echo session('msg');
                        echo"</p>";
                    }
                    ?>
					<h3 class="font-weight-light">Subscribe to my Newsletter</h3>
					<form action="{{ url('/submit') }}" enctype="multipart/formdata" class="mb-5" method="POST">
						<label>Name*</label>
						@csrf
						<input type="text" name="fullname" value="<?php echo old('fullname');?>" class="form-control">
						<label>Email*</label>
						
						<input type="email" name="email" value="<?php echo old('email');?>" class="form-control">
						<button class="form-control btn btn-download mt-3 text-light"type="submit" name="submit" value="">SEND</button>

					</form>
				</div>
				<div class="col col-md-5 mb-5">
				<iframe  style="border:4px solid #131114;"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.127405140736!2d3.3859308986926115!3d6.63109440345571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b930cda3ce91d%3A0x10076e8188d521cb!2s7%20Gbelegbo%20St%2C%20Olowora%2C%20Omu!5e0!3m2!1sen!2sng!4v1615051626780!5m2!1sen!2sng"
				 class="ml-5 col" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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