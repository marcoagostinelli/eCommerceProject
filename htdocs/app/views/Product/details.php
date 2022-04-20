<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Detail</title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar');?>

		<h1><?php echo $data->name ?></h1>
		<img src='/pictures/<?= $data->image ?>'height='100' width='100' /><br><br>
		<p><?php echo "$".$data->price ?></p>
		<form action='' method='post'>
			<input style="float:left; margin-right:20px" type="number" name="quantity" value=1 min="1" max="5">
			<label><input style="float:right;" type="submit" name='action' value='Add to Cart' class='form-control'></label>
		</form>
		<div style="border-top:1px solid";><br>
			<p><?php echo $data->description?><p><br>
			<p><?php echo "Rating: ".$data->rating . "/5"?><p>
		</div>

	</div>
</body>
</html>