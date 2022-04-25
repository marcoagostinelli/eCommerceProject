<?php
	namespace app\validation;

	#[\Attribute]
	class Name{
		function isValid($data){
			//contains only letters
			return preg_match("/^[A-Za-z]+$/",$data);
		}
	}