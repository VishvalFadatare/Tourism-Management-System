<?php 
   require_once('config.php');
   include_once('customer_class.php');
 ?>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha344-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV4i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body style="background-color: powderblue;">

    <form method="post" enctype="multipart/form-data">
    
       <div class="container" style="border: 2px solid black; margin:200px 130px 200px 130px; border-radius: 30px 30px 30px 30px; background-color: rgba(0,0,0,0.6);">

          <div><h1 style="text-align:center;">ADD CUSTOMER </h1></div>
           <a href="customer_listing.php" class="btn btn-primary">Go to Listing</a>
          <div class="row">
                <div class="col-4 mt-4" >
                   <label for="" class="form-label" style="margin-left: 200px; font-size: 20px">Name</label>
                </div>
                <div class="col-4 mt-4">
                   <input type="text" name="name" class="form-control" id="" >
                </div>
          </div>

          <div class="row">
                <div class="col-4 mt-4" >
                   <label for="" class="form-label" style="margin-left: 200px; font-size: 20px">User Name:</label>
                </div>
                <div class="col-4 mt-4">
                   <input type="text" name="username" class="form-control" id="" >
                </div>
          </div>

          <div class="row">
                <div class="col-4 mt-4" >
                   <label for="" class="form-label" style="margin-left: 200px; font-size: 20px">Password:</label>
                </div>
                <div class="col-4 mt-4">
                   <input type="password" name="password" class="form-control" id="" >
                </div>
          </div>

          <div class="row" style="margin-bottom:20px ">
                <div class="col-4 mt-4" >
                   <label for="" class="form-label" style="margin-left: 200px; font-size: 20px">Upload Photo:</label>
                </div>
                <div class="col-4 mt-4">
                   <input type="file" name="photo" class="form-control" id="" >
                </div>
         </div>

         <div><center><input type="submit" name="Submit" class="btn btn-primary"></center></div>

     </div>
      
      <input type="hidden" name="page_action" value="add_customer">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha344-A3rJD456KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>