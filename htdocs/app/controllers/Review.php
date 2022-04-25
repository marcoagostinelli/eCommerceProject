<?php
namespace app\controllers;

#[\app\filters\Client]
class Review extends \app\core\Controller{

	public function index($product_id){
		if (!isset($_POST['action'])){
			$this->view('Review/index');
		}else{
			$newReview = new \app\models\Review();
			$newReview->message = $_POST['message'];
			$newReview->product_id = $product_id;
			$newReview->client_id = $_SESSION['client_id'];
			$newReview->insert();
			header('location:/Product/details/'.$product_id);
		}
	}
}