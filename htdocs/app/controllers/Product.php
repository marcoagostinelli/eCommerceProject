<?php 
namespace app\controllers;

class Product extends \app\core\Controller{

#[\app\filters\Seller]
	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllMyProducts();
		if (!isset($_POST['action'])){
		$this->view('Product/index',$products);			
		}else{
			header('location:/Product/create');
		}

	}

#[\app\filters\Seller]
	public function create(){
		if (!isset($_POST['action'])){
			$this->view('Product/create');
		}else{
			$newProduct = new \app\models\Product();
			//add the product picture
			$filename = $this->imageUpload();
			
			if ($filename !=false){
				$newProduct->image=$filename;
			}

			$newProduct->name = $_POST['name'];
			$newProduct->description = $_POST['description'];
			$newProduct->price = $_POST['price'];
			$newProduct->category_name = $_POST['category_name'];
			$newProduct->seller_id = $_SESSION['seller_id'];
			$newProduct->insert();
			header('location:/Product/index');	
		}
		
	}
#[\app\filters\Seller]
	public function delete($product_id){
		$product = new \app\models\Product();
		$product = $product->get($product_id);
		if ($product->image != 'shoppingCart.png'){
			unlink('pictures/' . $product->image);
		}
		$product->delete($product_id);
		header('location:/Product/index');
	}	

	public function details($product_id){
		$product = new \app\models\Product();		
		if (!isset($_POST['action'])){
			$product = $product->get($product_id);
            //Add browsing history
            $browse = new \app\models\BrowsingHistory();
            $browse->search_id = $_SESSION['user_id'];
            $browse->user_id = $_SESSION['user_id'];
            $browse->product_id = $product->product_id;
            $browse->search = $product->name;
            date_default_timezone_set("America/New_York");
            $browse->date = date("Y-m-d h:i:sa");
            $browse->insertBrowsingHistory();
            $this->view('Product/details',$product);			
		}else{
			//send the product id and quantity to addToCart	
			header("location:/Cart/addToCart"."/" . $product_id ."/". $_POST['quantity']);
		}
	}

	private function imageUpload(){
		$filename=false;
		$file = $_FILES['productImage'];
		$acceptedTypes = ['image/jpeg'=>'jpg',
			'image/gif'=>'gif',
			'image/png'=>'png'];
		if(empty($file['tmp_name']))
			return false;

		$fileData = getimagesize($file['tmp_name']);
		if($fileData!=false && 
			in_array($fileData['mime'],array_keys($acceptedTypes))){

			$folder = 'pictures';
			$filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];

			move_uploaded_file($file['tmp_name'], "$folder/$filename");
		}
		return $filename;
	}	
}