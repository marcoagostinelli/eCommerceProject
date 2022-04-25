<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title><?= _("Client index") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?= _("My Client Profile") ?></h1>
		<h4><?= _($data['user']->first_name) ." ". _($data['user']->last_name) ?></h4><br>
		<img src='/pictures/<?=$data['client']->picture ?>' height='100' width='100'/>
		<a href='/Client/addProfilePic/<?=$data['client']->client_id?>'><?= _("Change Profile Picture") ?></a><br><br>
		<form action='' method='post'>
			<label class='form-label'><?= _("Payment Details:") ?><input  name="payment_details"  value="<?= _($data['client']->payment_details) ?>"type="text" class='form-control'/></label><br>
			<label class='form-label'><?= _("Address:") ?><input  name="address" type="text" value="<?= _($data['client']->address) ?>" class='form-control'/></label><br>
			<label><input type="submit" name='action' value='Confirm' class='form-control' /></label>
		</form>

	</div>
</body>
</html>