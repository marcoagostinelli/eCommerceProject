<?php
	namespace app\validation;

	#[\Attribute]
	class Number{
		function isValid($data){
			//ensures user is entering a number
			return preg_match("/^[0-9]*$/",$data);
		}
	}