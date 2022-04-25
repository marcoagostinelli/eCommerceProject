<?php 
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		//checks if user is client or seller
		$products = new \app\models\Product();
		$data['products'] = $products->getAll();
		$categories = new \app\models\Category();
		$data['categories'] = $categories->getAll();// this is done so that all categories get displayed

		if (!isset($_SESSION)){ //if user is signed in
			if (isset($_SESSION['client_id'])){
				$client = new \app\models\Client();
				$client = $client->get($_SESSION['user_id']);
				$data['role']=$client;
			}else{
				$seller = new \app\models\Seller();
				$seller = $seller->get($_SESSION['user_id']);
				$data['role']=$seller;
			}			
		}else{
			$data['role']=null; //no one is logged in			
		}
		if (!isset($_POST['action'])){
			$this->view('Main/index',$data);			
		}else{ //if user searches for products by name
			$data['products'] = $products->getFiltered($_POST['search']);
			$this->view('Main/index',$data);
		}


		
	}
}