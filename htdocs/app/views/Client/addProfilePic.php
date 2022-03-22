<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Client profile Picture</title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar',$data);?>

		<h1>Change Profile Picture</h1>
		<form action='' method='post' enctype='multipart/form-data'>
			<label>Profile Picture: <input type='file' name='profilePic' class='form-control' /></label>
			<label><input type='submit' name='action' value='Add Picture' class='form-control' /></label><br>
			<a href='/Client/index'>Cancel</a>
		</form>

	</div>
</body>
</html>