<?php 

namespace App\Models\MyAccount;


class MyAccountModel {


	private $firstName;
	private $lastName;
	private $app;

	public function __construct($firstName="",$lastName="") {

		$this->app = \Yee\Yee::getInstance();
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getAccountDetails() {

		$app = $this->app;
		return $app->db['default']->where("email", $_SESSION['userEmail'])->getOne('users');
	}

	
	public function updateAccount() {

		$app = $this->app;

		$data = array(
			'first_name' => $this->firstName,
			'last_name'=> $this->lastName,
		);

		$app->db['default']->where('email',$_SESSION['userEmail'])->update('users',$data);

	}

	public function validatePassword($pass,$passConf) {

		$pass = trim($pass);
		$passConf = trim($passConf);
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

	public function updatePassword($newPass) {

		$app = $this->app;

		$data = array(
			'password' => $newPass,
			);

		$app->db['default']->where('email',$_SESSION['userEmail'])->update('users',$data);
	}
}

?>