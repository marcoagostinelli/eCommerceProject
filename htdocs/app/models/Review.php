<?php 
namespace app\models;

class Review extends \app\core\Model{

	#[\app\validation\NonBlankString]	
	var $message;

	function __construct(){
		parent::__construct();
	}
	public function insert(){
		if ($this->isValid()){
			$SQL = 'INSERT INTO review(message,product_id,client_id) VALUES(:message,:product_id,:client_id)';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['message'=>$this->message,'product_id'=>$this->product_id,'client_id'=>$this->client_id]);			
		}

	}

	public function getReviewsForProduct($product_id){
		$SQL = 'SELECT * FROM review WHERE product_id = :product_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\Review");
		return $STMT->fetchAll();
	}
}