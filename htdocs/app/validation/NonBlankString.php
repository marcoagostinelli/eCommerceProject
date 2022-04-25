<?php
	namespace app\validation;

	#[\Attribute]
	class NonBlankString{
		function isValid($data){
			return $data != '';
		}
	}