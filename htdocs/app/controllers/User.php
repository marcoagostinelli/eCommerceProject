<?php
namespace app\controllers;

class User extends \app\core\Controller{

#[\app\filters\Logout]//make sure the user is not logged in
	public function index(){ //login page
		if (!isset($_POST['action'])){
			//if nobody is logged in
			$this->view('User/login');
		}else{
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			if ($user != false){
				//if username is found in database, check password		
				 if(password_verify($_POST['password'],$user->password_hash)){
					$_SESSION['username'] = $user->username;
					$_SESSION['user_id'] = $user->user_id;
					$_SESSION['first_name'] = $user->first_name;
					$_SESSION['last_name'] = $user->last_name;
					$_SESSION['role'] = $user->role;

					//check if user is seller or client
					//sets the SESSION client or seller id
					$seller = new \app\models\Seller();
					if ($seller->get($_SESSION['user_id'])!= null){
						$seller = $seller->get($_SESSION['user_id']);
						$_SESSION['seller_id'] = $seller->seller_id;
					}else{
						$client = new \app\models\Client();
						$client = $client->get($_SESSION['user_id']);
						$_SESSION['client_id'] = $client->client_id;

						//store the clients profile pic in the session
						$_SESSION['profilePic'] = $client->picture;
					}


					header("location:/Main/index");
				}else{
					$this->view('User/login','Incorrect username/password');
				}
			}else{
				$this->view('User/login','Incorrect username/password');
			}
		}
	}

#[\app\filters\Logout]
	function register(){
		if(!isset($_POST['action'])){
			$this->view('User/register');
		}else{
			$newUser = new \app\models\User();
			$newUser->username = $_POST['username'];
			if ($_POST['username']!="" && $_POST['first_name']!="" && $_POST['last_name']!=""){
			if (!$newUser->exists() && $_POST['password'] == $_POST['password_confirm']){
				 $newUser->password_hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
				 $newUser->first_name = $_POST['first_name'];
				 $newUser->last_name = $_POST['last_name'];
				 $newUser->role = $_POST['role'];
				 $newUser->insert();
				 $newUser = $newUser->get($_POST['username']);

				 //check for client or seller:
				 //also checks if the users first and last name passed validation
				 if (isset($newUser->first_name) && isset($newUser->last_name)){

					 if ($_POST['role']=="seller"){
					 	$newSeller = new \app\models\Seller();
					 	$newSeller->user_id = $newUser->user_id;
					 	$newSeller->insert();
					 	header('location:/User/index');					 	
					 }else{
					 	//if the user selects client, then the additional fields must be filled
					 	//validation gets appied
					 	if (preg_match("/^[0-9]*$/",$_POST['payment_details']) && $_POST['address'] != "" ){
					 	$newClient = new \app\models\Client();
					 	$newClient->user_id = $newUser->user_id;
					 	$newClient->payment_details = $_POST['payment_details'];
					 	$newClient->address = $_POST['address'];
						$newClient->insert();	
					 	header('location:/User/index');	
					 							 		
					 }else{
					 	$newUser->delete($newUser->user_id);			 	
					 	$this->view('User/register','Please complete all fields correctly');
					 	}
					 }				 	
				 }else{
					$this->view('User/register','Please complete all fields correctly*');				 	
				 }




			}else{
				if ($newUser->exists()){
					$this->view('User/register','An account with that username already exists');
				}else{
					$this->view('User/register','Passwords do not match');
				}
				
			}
			}else{
				$this->view('User/register','Please complete all fields');
			}

		}
	}
	function logout(){
		session_destroy();
		header('location:/Main/index');
	}

}