<?php
namespace app\models;

class Cart extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	public function getCart($client_id){
		$SQL = 'SELECT * FROM cart WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Cart");
		return $STMT->fetchAll();
	}

	public function getCartItem($product_id,$client_id){
		$SQL = 'SELECT * FROM cart WHERE product_id = :product_id AND client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id,'product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Cart");	
		return $STMT->fetch();
	}

	public function addToCart(){
		$SQL = 'INSERT INTO cart(client_id,product_id,quantity) VALUES(:client_id,:product_id,:quantity)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$this->client_id,'product_id'=>$this->product_id,'quantity'=>$this->quantity]);
	}

	public function deleteFromCart($product_id,$client_id){
		$SQL = 'DELETE FROM cart WHERE product_id = :product_id AND client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id,'client_id'=>$client_id]);
	}

	public function emptyCart($client_id){
		$SQL = 'DELETE FROM cart WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id]);
	}

	public function updateQuantity($product_id,$client_id){
		$SQL = 'UPDATE cart SET quantity = :quantity WHERE product_id = :product_id AND client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['quantity'=>$this->quantity,'product_id'=>$this->product_id,'client_id'=>$this->client_id]);
	}
}