<?php 
   require_once('config.php');
   include_once('customer_class.php');
   $book=booking_form_list();
 ?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form List</title>

	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha344-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV4i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">  
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
   <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
   <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
 
 	
</head>
<body>
        <h1 style="text-align: center;">Your Deatils....!</h1>

        <?php if(isset($_REQUEST['msg'])){?>
				<?php 
					if($_REQUEST['msg']==1){ echo "<div class='alert alert-success'>Record added successfully</div>"; }
					if($_REQUEST['msg']==2){ echo "<div class='alert alert-success'>Record edited successfully</div>"; }
					if($_REQUEST['msg']==3){ echo "<div class='alert alert-danger'>Record deleted successfully</div>"; }
					if($_REQUEST['msg']==4){ echo "Record added successfully"; }
				 ?>
	   <?php } ?>

	   <a href="booking_form.php" class="btn btn-info">Back</a>

	    <table id="example" class="display"> 
            <thead>
		    	<tr>
		    		<th>Id</th>
		    		<th>Name</th>
		    		<th>Email</th>
		    		<th>Phone</th>
		    		<th>Place</th>
		    		<th>How Many</th>
		    		<th>Arrival Date</th>
		    		<th>Leaving Date</th>
		    		<th>Action</th>
		    	</tr>
            </thead>

            <tbody>
	           	<?php $i=1; foreach($book as $val){ ?> 
		    	<tr>
		    		<th><?php echo $i; ?></th>
		    		
		    		<td><?php echo $val['name'];  ?></td>
		    		
		    		<td><?php echo $val['email']; ?></td>
		    		<td><?php echo $val['phone']; ?></td>
		    		<td><?php echo $val['place']; ?></td>
		    		<td><?php echo $val['how_many']; ?></td>
		    		<td><?php echo $val['arrival']; ?></td>
		    		<td><?php echo $val['leaving']; ?></td>
		    		<td><a href="booking_form_list.php?admin_id=<?php echo $val['id']; ?>&page_action=delete_booking">Delete</a></td>
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