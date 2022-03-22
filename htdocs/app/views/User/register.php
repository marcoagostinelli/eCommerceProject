<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Register page</title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>


	<a href='/Main/index'>Return to Main Page</a>
		<?php if ($data!= null)echo "<p style='color:red;'>$data</p>" ?>	
	<h1>Register an account</h1>
	<form method='post' action=''>
		<label><input type="submit" name='action' value='Register' class='form-control' /></label><br>	

		<label class='form-label'>Username:<input type='text' name='username' class='form-control' /></label><br>
		<label class='form-label'>Password:<input type='password' name='password' class='form-control' /></label><br>
		<label class='form-label'>Password confirmation:<input type='password' name='password_confirm' class='form-control' /></label><br>
		<label class='form-label'>First Name:<input type='text' name='first_name' class='form-control' /></label><br>
		<label class='form-label'>Last Name:<input type='text' name='last_name' class='form-control' /></label><br>

		<div style="padding-top: 10px;">
			<p> Are you a seller or client?</p>
				<label >Seller <input  type="radio" name="role" value="seller"></label>
				<label >Client <input  type="radio" name="role" value="customer" checked></label><br><br>
			</div>
			<h5>------The following information will only be used if registering as a client------</h5>
			<label class='form-label'>Payment Information:<input type='text' name='payment_details' class='form-control' /></label><br>
			<label class='form-label'>Address:<input type='text' name='address' class='form-control' /></label>

	</form>
	</div>
</body>
</html>