<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Storing messages in a JSON file with PHP</title>
</head>
<body>
<div class="container">
	<form method="post" action="">
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control"  name="email">
		
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="password">
	</div>

	<div class="form-group">
		<label>Enter Number</label>
		<input type="number" class="form-control" name="number">
	</div>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>

	<p class="error"><?php echo @$error ?></p>
	<p class="success"><?php echo @$success ?></p>
	</form>
	


</div>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>