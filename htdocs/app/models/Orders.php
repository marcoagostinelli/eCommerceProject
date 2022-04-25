<?php 
namespace app\models;

class Orders extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	public function createOrder(){
		$SQL = 'INSERT INTO orders(client_id,transaction_date) VALUES(:client_id,:transaction_date)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$this->client_id,'transaction_date'=>$this->transaction_date]);	
	}

	public function getOrder(){
		//returns the newest order
		$SQL = 'SELECT * FROM orders ORDER BY order_id DESC LIMIT 1';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\Orders");
		return $STMT->fetch();
	}
}