	<div >
		<ul style="list-style-type: none;padding:0;">
			
			<?php //check if user is logged in
			 if (!isset($_SESSION['user_id'])){?>
				<li style="display: inline;"><a href='/User/index'>Log in</a></li> or
				<li style="display: inline;padding-right:20;"><a href='/User/register'>Register</a></li>
			<?php } else{?> 
				<form action='/User/logout'><input style="float:left; margin-right:10px" type="submit" value="Logout" style="margin-top: 3";/></form>

				<?php //display profile pic only if user is a client
					if (isset($_SESSION['client_id'])){ ?><img src='/pictures/<?=$data->picture ?>' height='40' width='40' style='margin-left: 10px;border-radius: 50%; border-color: black; border-style: solid; border-width: thin;'/><br><br>
				<?php } ?>

			<?php } ?>

			<li style="display: inline;padding-right:20;"><a href='/Main/index'>Main Page</a></li>

			<?php //display client profile only if user is a client
				if (isset($_SESSION['client_id'])){ ?>
					<li style="display: inline;padding-right:20;"><a href='/Client/index'>Client Profile</a></li>
		<?php	}?>
		</ul>
	</div>