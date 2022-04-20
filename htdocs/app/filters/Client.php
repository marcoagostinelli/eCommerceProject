<?php
namespace app\filters;
//this filter is used to ensure a website visitor is logged in as a client before performing certain actions

#[\Attribute]
class Client{

	function execute(){
		if (!isset($_SESSION['client_id'])){			
			header('location:/Main/index');		
			return true;
		}
		return false;
	}
}