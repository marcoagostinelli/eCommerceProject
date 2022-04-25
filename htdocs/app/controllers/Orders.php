<?php 
namespace app\controllers;

#[\app\filters\Client]
class Orders extends \app\core\Controller{
	public function index($grandTotal){

		$client = new \app\models\Client();
		$data['clientInfo'] = $client->get($_SESSION['user_id']);
		$data['grandTotal'] = $grandTotal;
		if (!isset($_POST['action'])){
			$this->view('Orders/index',$data);
		}else{
			//if user confirms their order
			$newOrder = new \app\models\Orders();
			$newOrder->client_id = $_SESSION['client_id'];
			$newOrder->transaction_date = time();
			$newOrder->createOrder();
			//get the new order's id
			$newOrder = $newOrder->getOrder();

			//empty the client's cart
			$cart = new \app\models\Cart();
			$cart->emptyCart($_SESSION['client_id']);
			var_dump($newOrder);
			header('location:/Orders/done/'. $newOrder->order_id);
		}

	}

	public function done($order_id){
		$order = new \app\models\Orders();
		$myOrder = $order->getOrder($order_id);
		$this->view('Orders/done',$myOrder);
	}
}