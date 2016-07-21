<?php namespace App\Models\MyAccount;


class MyAccountModel {


	private $email;
	private $firstName;
	private $lastName;
	private $pass;
	private $confPass;
	private $app;

	public function __construct($email="",$firstName="",$lastName="",$pass="",$confPass="") {

		$this->app = \Yee\Yee::getInstance();
		$this->email = $email;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->pass = $pass;
		$this->confPass = $confPass;
	}

	public function getAccountDetails() {

		$app = $this->app;
		return $app->db['default']->where("email", $_SESSION['username'])->getOne('users');
	}
	
	public function updateDetails() {

		$app = $this->app;

		$data = array(

			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'password' => $this->pass,
			);

		// $app->db['default']->where('email', $this->email)->getOne('users');

		if ($app->db['default']->where('email',$_SESSION['username'])->update('users',$data)) {
			return true;
		}
		return false;

	}
}

?>