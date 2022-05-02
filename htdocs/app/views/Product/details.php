<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title><?= _("Detail") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?php echo _($data['product']->name) ?></h1>
		<img src='/pictures/<?= $data['product']->image ?>'height='100' width='100' /><br><br>
		<p><?php echo "$". _($data['product']->price) ?></p>
		<form action='' method='post'>
			<input style="float:left; margin-right:20px" type="number" name="quantity" value=1 min="1" max="5">
			<label><input style="float:right;" type="submit" name='action' value='<?= _("Add to Cart") ?>' class='form-control'></label>
			<p style='color:red'><?= $data['error'] ?></p>
		</form>
		<form action="/Wishlist/addToWishlist/<?php echo $data['product']->product_id ?>"><label><input style="float:right;" type="submit" name='action' value=' <?= _("Add to Wishlist") ?>' class='form-control'></label></form>

		<form action="/Review/index/<?php echo $data['product']->product_id ?>"><label><input style="float:right;" type="submit" name='action' value='<?= _("Leave Review") ?>' class='form-control'></label></form>
		
		<div style="border-top:1px solid";><br>
			<p><?php echo _($data['product']->description)?><p><br>
			<p><?php echo  _($data['product']->quantity) . _(" Products Remain in Stock")?> <p><br>
		</div>
		<div style="border-top:1px solid;"><br>
			<h4><?= _("Product Reviews") ?></h4><br>			
			<?php
				if (isset($data['reviews'][0])){
					for ($i = 0; $i < count($data['reviews']); $i++){
						$review = $data['reviews'][$i];
						$client = $data['clientInfo'][$i];
						$user = $data['userInfo'][$i];
						echo "<p style='font-size: 20px'>". _($user->first_name) ." ".  _($user->last_name) ."<img src='/pictures/$client->picture' height='40' width='40' style='margin-left: 10px;border-radius: 50%; border-color: black; border-style: solid; border-width: thin;'/></p>
							<p style='border-bottom:1px dotted; padding-bottom:20px;'>". _($review->message) ."</p>
							";
					}					
				}
	
			?>
		</div>

	</div>
</body>
</html>
