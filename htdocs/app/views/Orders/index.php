<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title><?= _("Checkout") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?= _("Checkout") ?></h1><br>
		<h4><?= _("Grand Total") ?></h4>
		<p style="font-weight: bold;">$<?php echo $data['grandTotal'] ?></p>
		<form action='' method='post'>
			<label><?= _("Credit Card Number: ") ?><br><input type='text' name='credit_card' value='<?= _($data["clientInfo"]->payment_details) ?>' /></label><br><br>
			<label><?= _("Shipping Address: ") ?><br><input type='text' name='address' value='<?= $data["clientInfo"]->address ?>' /></label><br><br>
			<input type='submit' name='action' value=' <?= _("Confirm Purchase") ?>'/>
		</form>
	</div>
</body>
</html>