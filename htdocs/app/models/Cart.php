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
		return $STMT->fetchAll();
	}

	public function getCartItem($product_id,$client_id){
		$SQL = 'SELECT * FROM cart WHERE product_id = :product_id AND client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id,'product_id'=>$product_id]);
		return $STMT->fetch();
	}

	public function addToCart(){
		$SQL = 'INSERT INTO cart(client_id,product_id,quantity,transaction_date) VALUES(:client_id,:product_id,:quantity,:transaction_date)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$this->client_id,'product_id'=>$this->product_id,'quantity'=>$this->quantity,'transaction_date'=>$this->transaction_date]);
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

	//TODO:add functions to modify product quantities
}