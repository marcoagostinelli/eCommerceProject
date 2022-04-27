	<div >
		<ul style="list-style-type: none;padding:0;">
			
			<?php //check if user is logged in
			 if (!isset($_SESSION['user_id'])){?>
				<li style="display: inline;"><a href='/User/index'><?= _("Log in") ?></a></li><?= _(" or ") ?>
				<li style="display: inline;padding-right:20;"><a href='/User/register'><?= _("Register") ?></a></li>
			<?php } else{?> 
				<form action='/User/logout'><input style="float:left; margin-right:10px" type="submit" value="<?= _('Logout') ?>" style="margin-top: 3";/></form>

				<?php //display profile pic only if user is a client
					if (isset($_SESSION['client_id'])){ ?><img src='/pictures/<?=$_SESSION['profilePic'] ?>' height='40' width='40' style='margin-left: 10px;border-radius: 50%; border-color: black; border-style: solid; border-width: thin;'/><br><br>
				<?php } ?>

			<?php } ?>

			<li style="display: inline;padding-right:20;"><a href='/Main/index'><?= _("Main Page") ?></a></li>
			<?php
				global $localizations;
				foreach ($localizations as $locale) {
					echo "<a style='display: inline;padding-right:20;text-decoration: none;color:black;' href='?lang=$locale'>".\Locale::getDisplayName($locale, $locale).'</a>';
				}
			?>

			<?php //display client profile only if user is a client
				if (isset($_SESSION['client_id'])){ ?>
					<li style="display: inline;padding-right:20;"><a href='/Client/index'><?= _("Client Profile") ?></a></li>
					<form style="display: inline;padding-right:20;" action='/Cart/index'><input  type="submit" value="<?= _('My Cart') ?>"/></form>
					<form style="display: inline;padding-right:20;" action='/Wishlist/index'><input  type="submit" value="<?= _('My Wishlist')?> ★"/></form>
		<?php	} ?>
		</ul>
	</div>