<?php 
   require_once('config.php');
   include_once('customer_class.php');

   if(!isset($_SESSION['id']))
   {
   		header('location:admin_login.php');
   }
   
 ?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha344-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV4i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color:thistle;">

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
                            <a class="nav-link" href="registration.php" style="padding-right: 50px; margin-left: 500px; color: white;">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="package.php" style="padding-right: 50px; color: white;">Packages</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="gallery.php" style="color: white;">Gallery</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin.php" style="color: white;">Admin</a>
                          </li>
                        </ul>
                       
                      </div>
                    </div>
          </nav>
        </div>
      </div>
   
  <!-- Navber End -->

	<div class="container-fluid" style="border: 3px solid black; margin:150px 100px 100px 450px; width: 40%; height: 400px; border-radius: 30px 30px 30px 30px;">
		<div class="row mt-5" style="text-align: center;">
			<div class="col-12">
				<a href="add_admin.php" class="btn" style="background-color: rgba(154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: black; border: 2px solid black;">Add admin</a>
			</div>
		</div>

        <div class="row mt-5" style="text-align: center;">
			<div class="col-12">
				<a href="admin_listing.php" class="btn" style="background-color: rgba(154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: black; border: 2px solid black;">View admin</a>
			</div>
		</div>

		<div class="row mt-5" style="text-align: center;">
			<div class="col-12">
				<a href="registration_listing.php" class="btn" style="background-color: rgba(154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: black; border: 2px solid black;">View Customer List</a>
			</div>
		</div>

		<div class="row mt-5" style="text-align: center;">
			<div class="col-12">
				<a href="booking_form_list.php" class="btn" style="background-color: rgba(154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: black; border: 2px solid black;">View Booking List</a>
			</div>
		</div>

	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha344-A3rJD456KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>