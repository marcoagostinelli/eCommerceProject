<?php 
namespace app\controllers;

#[\app\filters\Client]
class Cart extends \app\core\Controller{

	public function index(){
		$cart = new \app\models\Cart();
		$myCart = $cart->getCart($_SESSION['client_id']);
		if (!isset($_POST['action'])){
			$this->view('Cart/index',$myCart);
		}else{
			//TODO:checkout page
			
		}
	}
}