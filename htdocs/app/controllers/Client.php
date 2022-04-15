<?php 
namespace app\controllers;

class Client extends \app\core\Controller{
	public function index(){
			$user = new \app\models\User();
			$user = $user->get($_SESSION['username']);
			$client = new \app\models\Client();
			$client = $client->get($_SESSION['user_id']);		
		if (!isset($_POST['action'])){
			//send the session's client and user to the view
			$data[0] = $user;
			$data[1] =  $client;
			$this->view('Client/index',$data);			
		}else{
			$client->payment_details=$_POST['payment_details'];
			$client->address=$_POST['address'];
			$client->update();
			header('location:/Main/index');
		}

	}

	public function addProfilePic($client_id){
		$client = new \app\models\Client();
		$client = $client->get($_SESSION['user_id']);
		if (!isset($_POST['action'])){
			$this->view('Client/addProfilePic',$client);
		}else{
			$filename = $this->imageUpload();

			if($filename!=false){
				if($client->picture != 'default.jpg'){
					unlink('pictures/' . $client->picture);
				}
				$client->picture=$filename;
				//update the session's profile pic
				$_SESSION['profilePic'] = $filename;
			}
			$client->update();
			header('location:/Client/index/'.$client->client_id);			
		}
	}

		private function imageUpload(){
		$filename=false;
		$file = $_FILES['profilePic'];
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