<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title><?= _("My Products") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?= _("Manage Products") ?></h1>
		<form method='post' action=''>
			<label><input type="submit" name='action' value=' <?= _("Create Product") ?>' class='form-control' /></label><br>	
		</form>
		<?php
			foreach ($data as $product){ ?>
				<li><?= _($product->name) ?> <a href="/Product/delete/<?=$product->product_id?>"><?= _("Remove product") ?></a></li>
		<?php	}
		?>

	</div>
</body>
</html>