<?php

namespace App\Models\Signup;

class SignupModel {

	private $email;
	private $pass;
	private $confPass;
	private $app;
	public $activationCode;

	public function __construct($username, $pass, $confPass) {

		$this->app 		 = \Yee\Yee::getInstance();
		// $this->username  = $app->request->post('emailSignup');
  		// $this->pass      = $app->request->post('passSignup');
 		// $this->$confPass = $app->request->post('passConfSignup');
		$this->email  	 = $username;
        $this->pass 	 = $pass;
        $this->confPass  = $confPass;
	}

	public function isEmail() {

		if(filter_var(trim($this->email), FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	public function checkPass() {

		$pass = trim($this->pass);
		$confPass = trim($this->confPass);
		$regex = "/[a-zA-Z0-9]/";

		if (strlen($pass) > 5 && strlen($pass) <= 20 ) {
			
			if (preg_match($regex, $pass)) {

				if ($pass == $confPass) {
					return true;
				}
			}
		}
		return false;
	}

	public function validate() {
		
		if (!$this->isEmail()) {
			return false;
		}
		if (!$this->checkPass()) {
			return false;
		}
		// if(!$this->checkUserDb()){
		// 	return false;
		// }
		return true;
	}

	public function checkUserDb() {

		$app = $this->app;
		$isUserExist = $app->db['default']->where('email',$this->email)->getOne('users');

		// var_dump($isUserExist);

		if (!is_null($isUserExist)) {
			return false;
		}
		return true;
	}

	public function register() {

		$app 		 = $this->app;
		$db 		 = $app->db['default'];
		$dateTimeNow = date("Y-m-d H:i:s");
        $this->activationCode = $this->hashEmail();

        $data = array(
				"email" 			=> $this->email,
				"password" 			=> $this->pass,
				"username" 			=> $this->email,
				"active" 			=> 0,
				"signupDate" 		=> $dateTimeNow,
				"ip" 				=> "1.1.1.1",
				"activationCode" 	=> $this->activationCode,
			);
        
		$db->insert("users", $data );
	}

	public function hashEmail() {

		return md5($this->email);
	}

	public function checkActivationCode() {

		$app = $this->app;

		$data = array(
			'active' => 1,
			'activationCode' => $this->activationCode,
			);

		$app->db['default']->where("activationCode",$this->activetionCode);
		$app->db['default']->update("users", $data);

	}
}

