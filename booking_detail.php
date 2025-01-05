
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table</title>
</head>
<body>

	<table>
		<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Place</th>
			<th>How Many</th>
			<th>Arrival</th>
			<th>Leaving</th>
		</tr>

		<tr>
			<td><?php echo $_REQUEST['name']; ?></td>
			<td><?php echo $_REQUEST['email']; ?></td>
			<td><?php echo $_REQUEST['phone']; ?></td>
			<td><?php echo $_REQUEST['place']; ?></td>
			<td><?php echo $_REQUEST['how_many']; ?></td>
			<td><?php echo $_REQUEST['arrival']; ?></td>
			<td><?php echo $_REQUEST['leaving']; ?></td>

		</tr>
	</table>

</body>
</html>