<!DOCTYPE html>
<html>
<head>
	<title> Calculate </title>
</head>
<body>

	<form method="POST" action="calculate.php">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<select name="cal">
			<option value="add">Add</option>
			<option value="sub"> Subtract </option>
			<option value="mul"> Multiplay </option>
			<option value="div"> Divide </option>
		</select>
		<button type="submit"> Calculate </button>
	</form>

</body>
</html>


