<?php 
namespace app\models;

class Seller extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	function insert(){
		$SQL = 'INSERT INTO seller(user_id) VALUES(:user_id)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
	}
	function get($user_id){
		$SQL = 'SELECT * FROM seller WHERE user_id=:user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\Seller");
		return $STMT->fetch();
	}	


}
	