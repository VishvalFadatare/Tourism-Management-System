<?php 
   require_once('config.php');
   include_once('customer_class.php');
   $admin=admin_listing();
 ?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin List</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha344-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV4i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

	<a href="admin.php" class="btn btn-info">Back</a>
        <h1 style="text-align: center;">Admin List</h1>

          <?php if(isset($_REQUEST['msg'])){?>
		<?php 
			if($_REQUEST['msg']==1){ echo "<div class='alert alert-success'>Record added successfully</div>"; }
			if($_REQUEST['msg']==2){ echo "<div class='alert alert-success'>Record edited successfully</div>"; }
			if($_REQUEST['msg']==3){ echo "<div class='alert alert-danger'>Record deleted successfully</div>"; }
			if($_REQUEST['msg']==4){ echo "Record added successfully"; }
		 ?>
	<?php } ?>

	    <table id="example" class="display"> 
            <thead>
		    	<tr>
		    		<th>Id</th>
		    		<th>Photo</th>
		    		<th>Name</th>
		    		<th>Username</th>
		    		<th>Action</th>
		    	</tr>
            </thead>

            <tbody>
	           	<?php $i=1; foreach($admin as $val){ ?> 
		    	<tr>
		    		<th><?php echo $i; ?></th>
		    		<td><img style="height: 100px; width: 100px;" src="image/<?php echo $val['photo'];  ?>"></td>
		    		<td><?php echo $val['name'];  ?></td>
		    		<td><?php echo $val['username']; ?></td>
		    		<td><a href="edit_admin.php?admin_id=<?php echo $val['id']; ?>">Edit</a>&nbsp; &nbsp;|&nbsp; &nbsp;
			      	<a href="admin_listing.php?admin_id=<?php echo $val['id']; ?>&page_action=delete_admin">Delete</a></td>
		    	</tr>
		    	<?php $i++; } ?>
	    	</tbody>
	    </table>

        <script type="text/javascript">
     	$(document).ready(function () {
    			$('#example').DataTable();
		});
     </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha344-A3rJD456KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>