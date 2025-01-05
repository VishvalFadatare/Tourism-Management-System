<?php
   require_once('config.php');
   include_once('customer_class.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha344-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV4i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

	<style type="text/css">
		.cls_div{ border-radius: 40px 40px 40px 40px; width: 60%; background-color: rgba(0,0,0,0.5); }
		.cls_row{display: grid; grid-template-columns: 30% 70%}
		.cls_sty{text-align: right; padding-right: 50px; margin-bottom: 40px;}
		.cls_row label{text-align:right; font-size: 20px; color: white;}
		.cls_row input{width: 80%; height: 30px;}
		#cls_gender{display: grid; grid-template-columns: 30% 23% 23% 23%}	
		#cls_city{display: grid; grid-template-columns: 30% 17% 17% 17% 17%}
        body{background-image: url(image/8.jpg);
             background-repeat: no-repeat;
             background-size: cover;}	
      
	</style>


   <!-- Navbar Start-->
   <div class=" " style="position: fixed; z-index: 1000; width: 100%;">
      <div class="row">
        <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg bg-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><img src="image/13.png" class="img-fluid" alt="..." style="width: 100%; height: 30px"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php" style="color: white;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#About" style="color: white;">About</a>
                          </li>
                        </ul>

                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" href="login.php" style="padding-right: 50px; margin-left: 500px; color: white;">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="package.php" style="padding-right: 50px; color: white;">Packages</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="gallary.php" style="color: white;">Gallery</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin_login.php" style="color: white;">Admin</a>
                          </li>

                        </ul>
                       
                      </div>
                    </div>
          </nav>
        </div>
      </div>
   
  <!-- Navber End -->


      <form method="post" enctype="multipart/form-data">
       
      <div class="row mt-4">
		<div style="margin :0px 0px 0px 300px; " class="cls_div">
			<h1 style="text-align: center; color: ghostwhite; font-family: sans-serif; padding:20px 0px 10px 0px;">REGISTRATION FORM</h1>
			<div style="" class="cls_row">	
				<div style="" class="cls_sty"> <label>Name:</label> </div>
				<div style=""><input type="" name="name" style="background-color: rgba(0,0,0,0.4); border-radius: 40px 40px 40px 40px; color: white;" ></div>
			</div>

			<div style="" class="cls_row">	
				<div style="" class="cls_sty"> <label>Username:</label> </div>
				<div style=""><input type="text" name="username" style="background-color: rgba(0,0,0,0.4); border-radius: 40px 40px 40px 40px; color: white;"></div>
			</div>

			<div style="" class="cls_row">	
				<div style="" class="cls_sty"> <label>Password:</label> </div>
				<div style=""><input type="Password" name="password" style="background-color: rgba(0,0,0,0.4); border-radius: 40px 40px 40px 40px; color: white;"></div>
			</div>

               <div style="" class="cls_row">	
				<div style="" class="cls_sty"> <label>Email:</label> </div>
				<div style=""><input type="Email" name="email" style="background-color: rgba(0,0,0,0.4); border-radius: 40px 40px 40px 40px; color: white;"></div>
			</div>

	          <div style="" class="cls_row">	
				<div style="" class="cls_sty"> <label>City:</label> </div>
				<div style=""><input type="text" name="city" style="background-color: rgba(0,0,0,0.4); border-radius: 40px 40px 40px 40px; color: white;"></div>
			</div>

			<div style="" class="cls_row">	
				<div style="" class="cls_sty"> <label>Upload Photo:</label> </div>
				<div style=""><input type="file" name="photo" style="background-color: rgba(0,0,0,0.4); border-radius: 40px 40px 40px 40px; color: white;"></div>
			</div>
	          
	          <div class="row mt-4">
	          	   <div class="col-7" style="padding-left: 10%;">
	          	       <a href="login.php" class="btn" style="background-color: rgba(154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: white; border: 2px solid black;">Already have an account</a>
	          	   </div>

	               <div class="col-5" style="text-align: left; margin-bottom: 20px;">
	               	<input type="submit" name="Submit" class="btn" style="background-color: rgba(154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: white; border: 2px solid black;">
	               </div>
              </div>
	          </div>
	     </div>
	 
	     <input type="hidden" name="page_action" value="registration">
	</form> 

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha344-A3rJD456KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>