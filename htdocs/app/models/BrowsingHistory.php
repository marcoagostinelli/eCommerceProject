<?php

namespace app\models;

class BrowsingHistory extends \app\core\Model {
    public function __construct() {
        parent::__construct();
    }
    public function getAll($user_id) {
        $SQL = 'SELECT * FROM browsing_history WHERE user_id = :user_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,"app\models\BrowsingHistory");
        return $STMT->fetchAll();
    }

    public function insertBrowsingHistory() {
        $SQL = "INSERT INTO browsing_history(user_id,product_id,search,date) VALUES(:user_id,:product_id,:search,:date)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$this->user_id,'product_id'=>$this->product_id,'search'=>$this->search,'date'=>$this->date]);
    }

    public function clear($user_id) {
        $SQL = 'DELETE FROM browsing_history WHERE user_id = :user_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
    }
    
    public function delete($product_id) {
        $SQL = 'DELETE FROM browsing_history WHERE product_id = :product_id';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_id'=>$product_id]);
    }
}
