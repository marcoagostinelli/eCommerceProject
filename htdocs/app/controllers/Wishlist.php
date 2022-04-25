<?php 

namespace app\controllers;

#[\app\filters\Client]
class Wishlist extends \app\core\Controller{

	public function index(){
		$wishlist = new \app\models\Wishlist();
		$product = new \app\models\Product();
		$wishlist = $wishlist->getWishlist($_SESSION['client_id']);
		$wishlistItems = []; //stores each product in the wishlist
		foreach ($wishlist as $item){
			$currentProduct = $product->get($item->product_id);
			array_push($wishlistItems, $currentProduct);
		}
		$data['wishlist'] = $wishlist;
		$data['wishlistProducts'] = $wishlistItems;

		$this->view('Wishlist/index',$data);
	}

	public function addToWishlist($product_id){
		$wishlist = new \app\models\Wishlist();
		$wishlistItem = $wishlist->getWishlistItem($product_id,$_SESSION['client_id']);

		//check if item is already in wishlist
		if ($wishlistItem == false){
			$wishlist->client_id = $_SESSION['client_id'];
			$wishlist->product_id = $product_id;
			$wishlist->addToWishlist();
			echo '<script>alert("Item Added to Wishlist")</script>';
			header('location:/Product/details/'.$product_id);
		}else{
			echo '<script>alert("Item is Already in Wishlist")</script>';
			header('location:/Product/details/'.$product_id);
		}

	}

	public function removeFromWishlist($product_id){
		$wishlistItem = new \app\models\Wishlist();

		$wishlistItem->removeFromWishlist($product_id, $_SESSION['client_id']);
		header('location:/Wishlist/index');	
	}
}