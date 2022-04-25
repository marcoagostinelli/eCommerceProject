<?php 
namespace app\core;

class Model{

	protected static $_connection;

	function __construct(){
		self::$_connection = DBConnection::getInstance();
	}

	function isValid(){//return true if the object has valid data
		$reflection = new \ReflectionClass($this);


		$properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC);

		foreach ($properties as $property) {
			$validators = $property->getAttributes();
			$theData = $property->getValue($this);
			foreach ($validators as $validator) {

				$test = $validator->newInstance();
				if(!$test->isValid($theData))
					return false;
			}
		}
		return true;
	}
}