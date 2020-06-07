<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stack path.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<form action="register.php" method="post">
<div class="container">
		<h1>Registration form</h1>
	<div>
		<i class="fas fa-user"></i>
		<input type="text" name="FULLNAME" placeholder="FULLNAME" required>
	</div>
	<div>
		<i class="fas fa-envelope"></i>
		<input type="text" name="Email" placeholder="Email" required>
	</div>
	<div>
		<i class="fas fa-phone"></i>
		<input type="text" name="Phone_Number" placeholder="Phone_Number" required>
	</div>
	<div>
		<i class="fas fa-key"></i>
		<input type="text" name="Password" placeholder="Password" required>
	</div>
	<div>
		<i class="fas fa-key"></i>
		<input type="text" name="Confirm_Password" placeholder="Confirm_Password" required>
	</div>
	<button type="Reset">Register</button>
</div>
</form>
</body>
</html>
