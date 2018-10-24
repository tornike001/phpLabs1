<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<form action="action.php" method="post">
	<table class="table">
		<tr>
			<td colspan="2"><h3>პერსონალური ინფორმაცია</h3></td>
		</tr>
		
		<tr>
			<td>გვარი : </td>
			<td> <input type="text" name="thepost"></td>
		</tr>
		<tr>
			<td>თანამდებობა : </td>
			<td> <input type="text" name="thepost"></td>
		</tr>
		<td> ვალუტა :</td>
		<td>
			<select name="currency">
				<option value="ევრო"></option>
				<option value="დოლარი"></option>
				<option value="ლარი"></option>
			</select>
		</td>
	</tr>
	<tr>
		<td> ხელფასის რაოდენობა </td>
		<td> <<input type="text" name="minus"> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit" name="ok" value="თანხმობა"></td>
	</tr>
</table>
</form>
</body>
</html>