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
			<div class="col-3">
				<form action="index.php" method="get">
					<label>Enter price</label>
					<input type="text" class="form-control" name="cprice" required="true"><br>
					<input class="btn btn-light" type="submit" value="Calculate">
				</form>
			</div>
			<div class="col">
				<table class="table table-dark">
					<tr><th>Cost price</th><th>Shipping</th><th>Margin</th><th>VAT</th><th>Retail</th></tr>
					<?php
					if ($cp=$_GET['cprice']) { 
						echo "<tr><td>" . $cp . " €". "</td><td>" . getSH($cp) . " €". "</td><td>" . getMG($cp) . " €". "</td><td>" .  " €". getVAT($cp) . " €"."</td><td>" . getRetail($cp) . " €". "</td></tr>";
					} ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>