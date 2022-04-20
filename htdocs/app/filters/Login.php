<?php
namespace app\filters;
//this filter is used to ensure a website visitor is logged in before performing certain actions

#[\Attribute]
class Login{

	function execute(){
		if (!isset($_SESSION['user_id'])){			
			header('location:/User/index');		
			return true;
		}
		return false;
	}
}