<?php
include('functions.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Cost price table</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="index.php" method="get">
				<input type="text" name="cprice" required="true">
				<input class="btn btn-secondary" type="submit" value="Calculate">
			</form>
		</div>
			<table class="table table-sm">
			<tr><th>Cost price</th><th>Shipping</th><th>Margin</th><th>VAT</th><th>Retail</th></tr>
			<?php
			if ($cp=$_GET['cprice']) { 
				echo "<tr><td>" . $cp . "</td><td>" . getSH($cp) . "</td><td>" . getMG($cp) . "</td><td>" . getVAT($cp) . "</td><td>" . getRetail($cp) . "</td></tr>";
			} ?>
		</table>
	</body>
	</html>