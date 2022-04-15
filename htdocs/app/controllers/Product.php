<?php 
namespace app\controllers;

class Product extends \app\core\Controller{
	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllMyProducts();
		if (!isset($_POST['action'])){
		$this->view('Product/index',$products);			
		}else{
			header('location:/Product/create');
		}

	}
	public function create(){
		if (!isset($_POST['action'])){
			$this->view('Product/create');
		}else{
			$newProduct = new \app\models\Product();
			$newProduct->name = $_POST['name'];
			$newProduct->description = $_POST['description'];
			$newProduct->price = $_POST['price'];
			$newProduct->category_name = $_POST['category_name'];
			$newProduct->seller_id = $_SESSION['seller_id'];
			$newProduct->insert();
			header('location:/Product/index');	
		}
		
	}
	public function delete($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		$product->delete($product_id);
		header('location:/Product/index');
	}	

	public function details($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		$this->view('Product/details',$product);
	}	
}