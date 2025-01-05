<?php 

function registration()
{
	global $conn;
 
	move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$_FILES['photo']['name']);
	mysqli_query($conn,"INSERT INTO `tbl_customer` SET 
		name='".$_REQUEST['name']."',
		username='".$_REQUEST['username']."',
		password='".md5($_REQUEST['password'])."',
		email='".$_REQUEST['email']."',
		city='".$_REQUEST['city']."',
		photo='".$_FILES['photo']['name']."'
		");
	header("location:login.php?msg=1");
}

function add_admin()
{
	global $conn;
 
	move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$_FILES['photo']['name']);
	mysqli_query($conn,"INSERT INTO `tbl_admin` SET 
		name='".$_REQUEST['name']."',
		username='".$_REQUEST['username']."',
		password='".md5($_REQUEST['password'])."',
		photo='".$_FILES['photo']['name']."'
		");
	header("location:admin_listing.php?msg=1");
}

function booking_form()
{
	global $conn;
 
	// move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$_FILES['photo']['name']);
	mysqli_query($conn,"INSERT INTO `tbl_booking` SET 
		name='".$_REQUEST['name']."',
		email='".$_REQUEST['email']."',
		place='".$_REQUEST['place']."',
		how_many='".$_REQUEST['how_many']."',
		arrival='".$_REQUEST['arrival']."',
		leaving='".$_REQUEST['leaving']."'
		");
	header("location:booking_form_list.php?msg=1");
}

function booking_form_list()
{
    global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_booking`
			");
		$custArr=array();
		while($result=mysqli_fetch_assoc($query)){
			$custArr[]=$result;
		}

	return $custArr;
}

function admin_listing(){
	global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_admin`");
		$adminArr=array();
		while($result=mysqli_fetch_assoc($query)){
			$adminArr[]=$result;
		}

	return $adminArr;
}

function registration_listing(){
	global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_customer`");
		$regArr=array();
		while($result=mysqli_fetch_assoc($query)){
			$regArr[]=$result;
		}

	return $regArr;
}

function login()
 {
 	global $conn;

 	$query=mysqli_query($conn,"SELECT * FROM `tbl_customer` WHERE 
 		username='".$_REQUEST['username']."' and
 		password='".md5($_REQUEST['password'])."'
 		");
 	if(mysqli_num_rows($query)==1)
       {
       	$result=mysqli_fetch_assoc($query);

       	session_start();
       	$_SESSION['user_id']=$result['id'];
       	$_SESSION['name']=$result['name'];
       	header('location:booking.php');
       }
       else if (mysqli_num_rows($query)>1)
       {
       	header('location:login.php?err=1');
       }
       else
       {
       	header('location:login.php?err=2');
       }
 }

function admin_login()
 {
 	global $conn;

 	$query=mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE 
 		username='".$_REQUEST['username']."' and
 		password='".md5($_REQUEST['password'])."'
 		");
 	if(mysqli_num_rows($query)==1)
       {
       	$result=mysqli_fetch_assoc($query);

       	session_start();
       	$_SESSION['id']=$result['id'];
       	$_SESSION['name']=$result['name'];
       	header('location:admin.php');
       }
       else if (mysqli_num_rows($query)>1)
       {
       	header('location:admin_login.php?err=1');
       }
       else
       {
       	header('location:admin_login.php?err=2');
       }
 }

 function edit_admin()
{
	global $conn;

	// echo "UPDATE `tbl_admin` SET 
	// 		`name`='".$_REQUEST['name']."',
 //            username ='".$_REQUEST['username']."'".$strQuery."
 //            WHERE `id`='".$_REQUEST['id']."'
	// 		"

	$strQuery="";
	if(isset($_REQUEST['password']) && $_REQUEST['password']!="")
	{
   		$strQuery.=",`password`= '".md5($_REQUEST['password'])."'";
   	}

	if(isset($_FILES['photo']['name']) && $_FILES['photo']['name']!="")
	{
	   	move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$_FILES['photo']['name']);	
	   	$strQuery.=",`photo` = '".$_FILES['photo']['name']."'";
	}

	mysqli_query($conn,"UPDATE `tbl_admin` SET 
			`name`='".$_REQUEST['name']."',
            username ='".$_REQUEST['username']."'".$strQuery."
            WHERE `id`='".$_REQUEST['id']."'
			");

	header("location:admin_listing.php?msg=2");
}

function get_admin_details($id)
{
       global $conn;

       $query=mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE id='".$id."'");
       return mysqli_fetch_assoc($query);
}

function delete_admin()
{
	 	global $conn;
	 	//echo "DELETE FROM `tbl_cust` WHERE `id`='".$_REQUEST['cust_id']."'";exit;
	   	mysqli_query($conn,"DELETE FROM `tbl_admin` WHERE `id`='".$_REQUEST['admin_id']."'");
	   	header('location:admin_listing.php?msg=3');
 }

 function delete_booking()
{
	 	global $conn;
	 	//echo "DELETE FROM `tbl_cust` WHERE `id`='".$_REQUEST['cust_id']."'";exit;
	   	mysqli_query($conn,"DELETE FROM `tbl_booking` WHERE `id`='".$_REQUEST['admin_id']."'");
	   	header('location:booking_form_list.php?msg=3');
 }

if(isset($_REQUEST['page_action']))
{
	switch ($_REQUEST['page_action']) {
		case 'registration':
			registration();
			break;

	    case 'login':
		 	login();
		 	break;	

		case 'admin_login':
		 	admin_login();
		 	break;

        case 'booking_form':
			booking_form();
		 	break;

	    case 'booking_form_list':
		 	booking_form_list();
	     	break;

	    case 'registration_listing':
	        registration_listing();
	        break;

        case 'add_admin':
            add_admin();
            break;

        case 'edit_admin':
            edit_admin();
            break;

        case 'delete_admin':
            delete_admin();
            break;

        case 'delete_booking':
            delete_booking();
            break;

	}
}


 ?>