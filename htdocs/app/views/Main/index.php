<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Main page</title>
</head>
<body>
	<div class='container' style='margin-top: 3px;'>
		<?php $this->view('shared/menu_bar',$data[1]);?>

		<h1>Shopping Website</h1>

		<?php if (isset($_SESSION['user_id'])){
			
			 if ($_SESSION['role']=="seller"){ ?>
			
			<a href='/Product/index'>My Products</a><br><br>
			
	<?php	} 
		}
	?>
		<form action='' method='post'>
			<label class='form-label'><input  name="search" placeholder='Search for Products' type="text" class='form-control'/></label>
			<label><input type="submit" name='action' value='Go' class='form-control' /></label>
		</form>
		<label><a style="text-decoration:none;" href="/Main/index"><input type='button' value='Reset Filters ' class='form-control'/></a></label><br><br>
	<?php 
		foreach ($data[2] as $category){ ?>
			<ul style="float: left; list-style:none; margin-right:25px;">
				<li><h5><?=$category->name?></h5></li>

			<?php foreach ($data[0] as $product){ 

				if ($product->category_name == $category->name){ ?>
				<li><a style="text-decoration: none;" href="/Product/details/<?=$product->product_id?>"><?=$product->name ?></a></li>
		<?php	}
		
			} ?>

			</ul>
<?php	} ?>

		<table>
	
		</table>			
	</div>
</body>
</html>