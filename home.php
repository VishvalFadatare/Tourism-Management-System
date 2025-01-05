<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


  <body>

    <!-- Navbar Start-->
   <div class="container-fluid" style="position: fixed; z-index: 1000;">
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
                            <a class="nav-link active" aria-current="page" href="#carousel" style="color: whitesmoke;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#services" style="color: whitesmoke;">About</a>
                          </li>
                          
                        </ul>

                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" href="registration.php" style="padding-right: 50px; margin-left: 500px; color: whitesmoke;">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="package.php" style="padding-right: 50px; color: whitesmoke;">Packages</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="gallery.php" style="color: whitesmoke;">Gallery</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin_login.php" style="padding-left: 30px; color: whitesmoke;">Admin</a>
                          </li>

                        </ul>


                       
                      </div>
                    </div>
          </nav>
        </div>
      </div>
    </div>
  <!-- Navber End -->

  
  <!-- carsoul Start -->

      <div class="container-fluid">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/25.jpeg" class="d-block w-100" alt="..." style="width: 100%; height:700px ;">
                    <label style="position:absolute; top:50%; left:35%;
                    transform:translateY(-50%,-50%); z-index:2; font-size: 34px; color: white; font-family:cursive;">
                    <b> ADVENTURE  IS  WORTHWHILE</b></label>
                </div>
                <div class="carousel-item">
                    <img src="image/11.jpg" class="d-block w-100" alt="..." style="width: 100%; height:700px ;">
                     <label style="position:absolute; top:50%; left:35%;
                    transform:translateY(-50%,-50%); z-index:2; font-size: 34px; color: white; font-family:cursive;">
                    <b> TRAVEL AROUND THE WORLD</b></label>
                </div>
                <div class="carousel-item">
                    <img src="image/26.jpeg" class="d-block w-100" alt="..." style="width: 100%; height:700px ;">
                     <label style="position:absolute; top:50%; left:35%;
                    transform:translateY(-50%,-50%); z-index:2; font-size: 34px; color: white; font-family:cursive;">
                    <b> JOURNEY TO EXPLORE WORLD </b></label>
                </div>
                <!-- <div class="carousel-item">
                    <img src="image/10.jpg" class="d-block w-100" alt="...">
                </div> -->
            </div>
        </div>
      </div>
  <!-- carsoul End -->

<!-- Services Start -->
  <div class="container-fluid" id="services">
    <div class="row mt-5">
      <h1 style="text-align: center; font-size: 30px; font-family: cursive;">OUR SERVICES</h1>
    </div>
    <div class="row mt-4">
      <div class="col-2">
          <img src="image/21.png" alt="..." style="width: 100%; height:150px ;">
      </div>
      <div class="col-2">
          <img src="image/18.jpg" alt="..." style="width: 100%; height:150px ;">
      </div>
      <div class="col-2">
          <img src="image/22.png" alt="..." style="width: 100%; height:150px ;">
      </div>
      <div class="col-2">
          <img src="image/23.jpg" alt="..." style="width: 100%; height:150px ;">
      </div>
      <div class="col-2">
          <img src="image/24.png" alt="..." style="width: 100%; height:150px ;">
      </div>
      <div class="col-2">
          <img src="image/27.jpg" alt="..." style="width: 100%; height:150px ;">
      </div>
    </div>
  </div>
<!-- Services End -->

  <!-- Card Heading Start -->
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-sm-12">
            <div style="text-align: center; font-size: 30px; color: red; border: 2px solid black;   border-radius: 20px 20px 20px 20px; background-color:pink"> <marquee direction="right">  TOP PLACES </marquee>
           </div>
        </div>
      </div>
     </div>
   <!-- Card Heading End  -->

   <!-- Card Start -->
     <div class="container-fluid mt-4" style="z-index: 500; margin-left: 40px;">
      <div class="row">

        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
            <img src="image/1.jpg" class="card-img-top" alt="..." style="height: 250px">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">India</h5>
              <p class="card-text">30000-40000</p>
              <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
            </div>
          </div>
        </div>


        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
              <img src="image/2.jpg" class="card-img-top" alt="..." style="height: 250px">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">UK</h5>
                <p class="card-text">70000-150000</p>
                <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
              </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
              <img src="image/3.jpg" class="card-img-top" alt="..." style="height: 250px">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Swaziland</h5>
                <p class="card-text">80000-130000</p>
                <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
              </div>
            </div>
        </div>

        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
              <img src="image/4.jpg" class="card-img-top" alt="..." style="height: 250px">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Japan Tokyo</h5>
                <p class="card-text">50000-90000</p>
                <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
              </div>
            </div>
        </div>

      </div>

      <div class="row mt-4">

        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
            <img src="image/1.jpg" class="card-img-top" alt="..." style="height: 250px">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Spain Madrid</h5>
              <p class="card-text">110000-150000</p>
              <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
            </div>
          </div>
        </div>


        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
              <img src="image/2.jpg" class="card-img-top" alt="..." style="height: 250px">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Europe City</h5>
                <p class="card-text">120000-170000</p>
                <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
              </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card" style="width: 26rem;">
              <img src="image/3.jpg" class="card-img-top" alt="..." style="height: 250px">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Hong Kong City</h5>
                <p class="card-text">90000-160000</p>
                <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
              </div>
            </div>
        </div>

        <div class="col-sm-3">
          <div class="card" style="width: 26rem; margin-right: 20px;">
              <img src="image/4.jpg" class="card-img-top" alt="..." style="height: 250px">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Italy</h5>
                <p class="card-text">95000-145000</p>
                <center><a href="login.php" class="btn btn-primary">Book Now</a></center>
              </div>
            </div>
        </div>

      </div>

    </div>
   <!-- Card End  -->

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


  </body>
</html>