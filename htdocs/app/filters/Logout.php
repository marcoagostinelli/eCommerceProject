<?php
namespace app\filters;
//this filter is used to ensure a visitor is NOT logged in before performing certain actions

#[\Attribute]
class Logout{

	function execute(){
		if (isset($_SESSION['user_id'])){	
			header('location:/Main/index');
			return true;
		}
		return false;
	}
}