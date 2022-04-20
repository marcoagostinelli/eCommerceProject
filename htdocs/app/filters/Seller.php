<?php
namespace app\filters;
//this filter is used to ensure a website visitor is logged in as a seller before performing certain actions

#[\Attribute]
class Seller{

	function execute(){
		if (!isset($_SESSION['seller_id'])){			
			header('location:/Main/index');		
			return true;
		}
		return false;
	}
}