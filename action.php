<!DOCTYPE html>
<html>
<head>
	<title>Action</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$x=$_POST['money']- $_POST['minus'];
	?>
	<table class="table2">
		<thead>
			<tr class="boldText">
				<td>სახელი</td>
				<td>გვარი </td>
				<td>დაკავებული თანამდებობა </td>
				<td>ხელფასის რაოდენობა </td>
				<td>დარიცხული საშემოსავლო</td>
				<td>დარიცხული ხელფასი </td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $_POST ['name']?></td>
				<td><?php echo $_POST ['lastname']?></td>
				<td><?php echo $_POST ['thepost']?></td>
				<td><?php echo $_POST ['money']."".$_POST['currency']?></td>
				<td><?php echo $_POST ['minus']."".$_POST['currency']?></td>
			</tr>
		</tbody>
	</table>

</body>
</html>