<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
	th {padding-right: 100px;}
	td {padding-right: 100px; padding-bottom: 50px;text-align: center;}
</style>
	<title><?= _("My Cart") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?= _("My Cart") ?></h1><br>
		
		<table style="border-bottom: solid black; margin-bottom: 25px;">
			<tr><th></th><th><?= _("Product Name") ?></th><th><?= _("Each") ?></th><th><?= _("Quantity") ?></th><th><?= _("Total") ?></th></tr>
		<?php
			$grandTotal = 0;
			for ($i = 0; $i < count($data['cart']); $i++) {
				//set the current cart item and product
				$cartItem = $data['cart'][$i];
				$product = $data['cartProducts'][$i];
				//calculate the total for a product
				$productTotal = $cartItem->quantity * $product->price;
				$grandTotal+= $productTotal;

				echo "<tr><td><img src='/pictures/$product->image' height='80' width='80' /></td>
				<td>" . _($product->name) ."</td>
				<td>$" . _($product->price) ."</td>
				<td>" . _($cartItem->quantity) ."</td>
				<td>$" . _($productTotal) ."</td>
				<td><button><a style='text-decoration: none;color: black;' href='/Cart/removeFromCart/$product->product_id'>" . _("Remove") ."</a></button></td>
				";
			}
		?>
		</table>
		<h4><?= _("Grand Total") ?></h4>
		<form action='' method='post'>
			<p>$<?= _($data['grandTotal']) ?> <input type="submit" name = action value="<?= _('Proceed to Checkout') ?>"/></p>
		</form>
	</div>
</body>
</html>