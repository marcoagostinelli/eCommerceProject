<?php 
namespace app\models;

class Product extends \app\core\Model{

	#[\app\validation\NonBlankString]
	var $name;
	#[\app\validation\NonBlankString]
	var $description;

	#[\app\validation\NonBlankString]
	//since price is being entered in a number box, it only needs to be checked for nonBlank
	var $price;

	function __construct(){
		parent::__construct();
	}
	public function getAll(){
		$SQL = 'SELECT * FROM product';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
		return $STMT->fetchAll();		
	}
		public function getFiltered($name){
		$SQL = 'SELECT * FROM product WHERE name LIKE :name';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['name'=>"%$name%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
		return $STMT->fetchAll();
	}

	public function get($product_id){
		$SQL = 'SELECT * FROM product WHERE product_id = :product_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\Product");
		return $STMT->fetch();
	}	

	public function getAllMyProducts(){
		$SQL = 'SELECT * FROM product WHERE seller_id = :seller_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$_SESSION['seller_id']]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Product");
		return $STMT->fetchAll();		
	}
	function insert(){
		if ($this->isValid()){
			$SQL = 'INSERT INTO product(name,description,price,category_name,image,seller_id) VALUES(:name,
					:description,:price,:category_name,:image,:seller_id)';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['name'=>$this->name,'description'=>$this->description,'price'=>$this->price,
								'category_name'=>$this->category_name,'image'=>$this->image,'seller_id'=>$this->seller_id]);			
		}

	}
	public function delete($product_id){
		$SQL = 'DELETE FROM product WHERE product_id = :product_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
	}
}