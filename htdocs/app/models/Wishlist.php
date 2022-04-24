<?php 
namespace app\models;

class Wishlist extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	public function getWishlist($client_id){
		$SQL = 'SELECT * FROM wishlist WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Wishlist");
		return $STMT->fetchAll();		
	}

	public function getWishlistItem($product_id,$client_id){
		$SQL = 'SELECT * FROM wishlist WHERE product_id = :product_id AND client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id,'product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Wishlist");	
		return $STMT->fetch();		
	}

	public function addToWishlist(){
		$SQL = 'INSERT INTO wishlist(client_id,product_id) VALUES(:client_id,:product_id)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$this->client_id,'product_id'=>$this->product_id]);		
	}

	public function removeFromWishlist($product_id,$client_id){
		$SQL = 'DELETE FROM wishlist WHERE product_id = :product_id AND client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id,'client_id'=>$client_id]);
	}
}
