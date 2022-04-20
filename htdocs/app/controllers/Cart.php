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

	public function addToCart($product_id,$quantity){
		$newCart = new \app\models\Cart();
		$cartItem = $newCart->getCartItem($product_id,$_SESSION['client_id']);
		//check if item is already in cart
		if ($cartItem == false){
			$newCart->client_id = $_SESSION['client_id'];
			$newCart->product_id = $product_id;
			$newCart->quantity = $quantity;			
			$newCart->addToCart();
			header('location:/Cart/index');
		}else{
			//add to the quantity if item is already in cart
			$cartItem->quantity = $cartItem->quantity + $quantity;
			$cartItem->updateQuantity($product_id,$_SESSION['client_id']);
			header('location:/Cart/index');
		}
	}

	public function removeFromCart($product_id){
		//TODO: remove an item from the cart
	}
}