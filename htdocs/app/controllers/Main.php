<?php 
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		//checks if user is client or seller
		$products = new \app\models\Product();
		$data[0] = $products->getAll();
		$categories = new \app\models\Category();
		$data[2] = $categories->getAll();// this is done so that all categories get displayed

		if ($_SESSION!= null){ //if user is signed in
			if (isset($_SESSION['client_id'])){
				$client = new \app\models\Client();
				$client = $client->get($_SESSION['user_id']);
				$data[1]=$client;
			}else{
				$seller = new \app\models\Seller();
				$seller = $seller->get($_SESSION['username']);
				$data[1]=$seller;
			}			
		}else{
			$data[1]=null; //no one is logged in			
		}
		if (!isset($_POST['action'])){
			$this->view('Main/index',$data);			
		}else{ //if user searches for products by name
			$data[0] = $products->getFiltered($_POST['search']);
			$this->view('Main/index',$data);
		}


		
	}
}