<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title><?= _("Checkout Finished") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?= _("Thank You For Shopping With Us!") ?></h1><br>
		<h4><?= _("Your Order Information:") ?></h4><br>
		<p style="font-weight: bold;"><?= _('Order Id:') . _($data->order_id) ?></p>
		<label style="font-weight: 500;"><?= _("Order Date: ") ?><br><p><?php echo _(strftime(_("%A,%B,%e,%G"),$data->transaction_date)) ?></p></label><br><br>
		<button ><a style='text-decoration: none;color: black;' href='/Main/index'><?= _("Back to Main") ?></a></button>
	</div>
</body>
</html>