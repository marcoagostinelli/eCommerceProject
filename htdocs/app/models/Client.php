<?php 
namespace app\models;

class Client extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	function insert(){
		$SQL = 'INSERT INTO client(payment_details,address,user_id) VALUES(:payment_details,:address,:user_id)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['payment_details'=>$this->payment_details,'address'=>$this->address,'user_id'=>$this->user_id]);
	}
	function get($user_id){
		$SQL = 'SELECT * FROM client WHERE user_id=:user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\Client");
		return $STMT->fetch();
	}	

	function update(){
		$SQL = 'UPDATE client SET payment_details = :payment_details, address = :address, picture = :picture WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['payment_details'=>$this->payment_details,'address'=>$this->address,'picture'=>$this->picture,'client_id'=>$this->client_id]);
	}

}