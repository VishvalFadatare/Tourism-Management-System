<?php 	

function add_books()
{
	global $conn;
 
	move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$_FILES['photo']['name']);
	mysqli_query($conn,"INSERT INTO `tbl_books` SET 
		b_name='".$_REQUEST['b_name']."',
		b_photo='".$_FILES['photo']['name']."',
		b_price='".$_REQUEST['b_price']."',
		");
	//header("location:login.php?msg=1");
}


 ?>