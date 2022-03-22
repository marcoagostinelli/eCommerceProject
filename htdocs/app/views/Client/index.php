<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Client index</title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar',$data[1]);?>

		<h1>My Client Profile</h1>
		<h4><?=$data[0]->first_name ." ". $data[0]->last_name?></h4><br>
		<img src='/pictures/<?=$data[1]->picture ?>' height='100' width='100'/>
		<a href='/Client/addProfilePic/<?=$data[1]->client_id?>'>Change Profile Picture</a><br><br>
		<form action='' method='post'>
			<label class='form-label'>Payment Details:<input  name="payment_details"  value="<?=$data[1]->payment_details?>"type="text" class='form-control'/></label><br>
			<label class='form-label'>Address:<input  name="address" type="text" value="<?=$data[1]->address?>" class='form-control'/></label><br>
			<label><input type="submit" name='action' value='Confirm' class='form-control' /></label>
		</form>

	</div>
</body>
</html>