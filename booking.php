<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha344-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV4i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>


	
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
                            <a class="nav-link" href="#About" style="color: white; padding-left: 20px;">Gallery</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin_login.php" style="color: white; padding-left: 30px;">Admin</a>
                          </li>
                          <li class="nav-item">
                            <label style="color: white;  padding-left: 30px;" ><?php echo 'Hi'.' '.$_REQUEST['username']; ?></label>
                          </li>

                        </ul>
                       
                      </div>
                    </div>
          </nav>
        </div>
      </div>
   
  <!-- Navber End -->


	<!--video section start-->
      <div class="container-fluid">
		    <div class="vid-parent" >
				  <div class="vide" >
				      <video autoplay muted loop playinline style="width: 100%; height: 100%; margin-top: 10px;margin-bottom: 10px; ">
					     <source src="image/video.mp4">
					  </video>

				  </div>
				   <div class="vid-content">
				   	 <center><a href="booking_form.php" class="btn btn-info" style="position:absolute; top:40%; left:43%;
                    transform:translateY(-50%,-50%); z-index:2; font-size: 36px; font-family:monospace; background-color: rgba(	154,243,255,0.5); border-radius: 40px 40px 40px 40px; color: black; border: 3px solid black;"><b>BOOK NOW</b></a></center>
		</div>
			</div>
	  </div>
		
		<!-- video section end-->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>