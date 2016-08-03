<?php
namespace App\Models\ForgottenPassword;

class ForgotPassModel {


	private $app;
	public $secretCode;

	public function __construct() {
		$this->app = \Yee\Yee::getInstance();
	}


	public function isEmailExist($email) {

		$app = $this->app;

		return $app->db['default']->where('email', $email)->getOne('users');
	}



	public function GenerateSecretCode() {
		$secretCode = array();

		for ($i=0; $i < 5; $i++) { 

			$rand = rand(0,9);
			array_push($secretCode,$rand);
		}
		$this->secretCode = implode("",$secretCode);
		return implode("", $secretCode);
	}


	public function insertEmailAndCode($email) {

		$app = $this->app;

		$data = array(
			'email' => $email,
			'code' => $this->GenerateSecretCode(),
			);

		$app->db['default']->insert('forgotten_password',$data);
	}


	public function checkSecretCode($secretCode)
	{
		$app = $this->app;

		if ($app->db['default']->where('code',$secretCode)->getOne('forgotten_password')) {
			return true;
		}
		return false;
	}
	

	public function updateNewPassword($newPass)
	{
		$app = $this->app;

		$data = array(

			'password' => $newPass,
		);

		if($app->db['default']->where('email', $_SESSION['email'])->update('users',$data))
		{
			return true;
		}
		return false;
	}

	public function deleteSecretCode() 
	{
		$app = $this->app;

		$app->db['default']->where('email', $_SESSION['email'])->delete('forgotten_password');
	}
}