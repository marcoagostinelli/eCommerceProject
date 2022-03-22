<?php 
namespace app\models;

class User extends \app\core\Model{
	function __construct(){
		parent::__construct();
	}

	function get($username){
		$SQL = 'SELECT * FROM user WHERE username=:username';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\User");
		return $STMT->fetch();
	}
	function getRole($user_id){
		$SQL = 'SELECT role FROM user WHERE user_id=:user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\User");
		return $STMT->fetch();
	}
	function insert(){
		$SQL = 'INSERT INTO user(username,password_hash,first_name,last_name,role) VALUES(:username,:password_hash,:first_name,
			:last_name,:role)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash,'first_name'=>$this->first_name,
			'last_name'=>$this->last_name,'role'=>$this->role]);
	}
	function exists(){
		return $this->get($this->username) != false;
	}

	function getProfile(){
		$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\Profile");
		return $STMT->fetch();
	}
	
}