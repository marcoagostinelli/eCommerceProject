<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title><?= _("List Product") ?></title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?= _("List Product") ?></h1>
		<form method='post' action='' enctype='multipart/form-data'>
			<label class='form-label'><?= _("Product Name:") ?><input type='text' name='name' class='form-control' /></label><br>
			<label class='form-label'><?= _("Description:") ?><textarea name='description' class='form-control'></textarea></label><br>
			<label class='form-label'><?= _("Price:") ?><input step=".01" name="price" type="number" class='form-control'/></label><br>
			<label><?= _("Product image: ") ?><input type='file' name='productImage' class='form-control' /></label>
			<div style="padding-top: 10px;">
			<p><?= _("Select a Category") ?></p>
				<label ><?= _("Baby") ?> <input  type="radio" name="category_name" value="baby" checked></label><br> 
				<label ><?= _("Garden") ?> <input  type="radio" name="category_name" value="garden"></label><br>
				<label ><?= _("Home") ?> <input  type="radio" name="category_name" value="home"></label><br>
				<label ><?= _("Office") ?> <input  type="radio" name="category_name" value="office"></label><br>
				<label ><?= _("Pets") ?> <input  type="radio" name="category_name" value="pets"></label><br>
				<label ><?= _("Sports") ?> <input  type="radio" name="category_name" value="sports"></label><br>
			</div><br>
			<label><input type="submit" name='action' value='<?= _("Confirm") ?>' class='form-control' /></label>
		</form>

	</div>
</body>
</html>