<?php namespace App\Models\MyAccount;


class MyAccountModel {


	private $firstName;
	private $lastName;
	private $pass;
	private $confPass;
	private $app;

	public function __construct($firstName="",$lastName="",$pass="",$confPass="") {

		$this->app = \Yee\Yee::getInstance();
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->pass = $pass;
		$this->confPass = $confPass;
	}

	public function getAccountDetails() {

		$app = $this->app;
		return $app->db['default']->where("email", $_SESSION['userEmail'])->getOne('users');
	}


	
	public function updateAccount() {

		$app = $this->app;

		$pass = trim($this->pass);
		$confPass = trim($this->confPass);

		// $accDetails = $this->getAccountDetails();

		$data = array(
			'first_name' => $this->firstName,
			'last_name'=> $this->lastName,
			);

		if ($pass != "") {

			$data['password'] = $pass;
		}

		if ($app->db['default']->where('email',$_SESSION['userEmail'])->update('users',$data)) {

			return true;
		}

		return false;

	}

	public function validatePassword() {

		$pass = trim($this->pass);
		$passConf = trim($this->confPass);
		$regex = "/[a-zA-Z0-9]/";

		if (strlen($pass) > 5 && strlen($pass) <= 20) {
			
			if (preg_match($regex, $pass)) {
				if ($pass == $passConf) {
					return true;
				}
			}
		}
		return false;


	}
}

?>