<?php 
   require_once('config.php');
   include_once('customer_class.php');
   $admin_details=get_admin_details($_REQUEST['admin_id']);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>



<h1>Edit Admin</h1>

<form method="post" enctype="multipart/form-data">
	<div>
		Name <input type="text" class="form-control" value="<?php echo $admin_details['name']; ?>" name="name">
	</div>

	<div>
		Username <input type="text" class="form-control" value="<?php echo $admin_details['username']; ?>" name="username">
	</div>

	<div>
		Password <input type="password" class="form-control" name="password">
	</div>

	<img style="height: 200px; width: 200px" src="image/<?php echo $admin_details['photo']; ?>">
	<div>
		Upload Customer Photo <input type="file" class="form-control" name="photo">
	</div>
	<div>
		<input type="hidden" name="page_action" value="edit_admin">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['admin_id']; ?>">
		<input type="submit" name="submit" class="btn btn-primary">
	</div>
</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>