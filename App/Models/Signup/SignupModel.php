<?php

namespace App\Models\Signup;

class SignupModel {


	/**
	* Email from signup page
	*
	* @var string
	*/
	private $email;
	/**
	* Password from signup page
	*
	* @var mixed
	*/
	private $pass;
	/**
	* Confirm password from signup page
	*
	* @var mixed
	*/
	private $confPass;
	/**
	* Yee instance
	*
	* @var Yee
	*/
	private $app;
	/**
	* Auto-generate hash code for 'activationCode' field in database
	*
	* @var string
	*/
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


	/**
	* Check for valid email format
	*
	* @return boolean true if email format is valid
	*/
	public function isEmail() {

		if(filter_var(trim($this->email), FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	/**
	* Check password format and $pass is equal(==) to $confPass example( 12345 == 12345 )
	*
	* @return boolean true if $pass == $confPass and format is correct
	*/
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

	/**
	* Helper method call isEmail() and checkPass() 
	*
	* @var boolean true if email and password are correct
	*/
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

	/**
	* Check database if this $email has already existed or hasn't
	*
	* @return boolean true if $email doesn't exist in the database
	*/
	public function checkUserDb() {

		$app = $this->app;
		$isUserExist = $app->db['default']->where('email',$this->email)->getOne('users');

		if (!is_null($isUserExist)) {
			return false;
		}
		return true;
	}

	/**
	* Registration new account. You need to use validate() and checkUserDb() functions before use register()
	*
	* @return void
	*/
	public function register() {

		$app 		 = $this->app;
		$db 		 = $app->db['default'];
		$dateTimeNow = date("Y-m-d H:i:s");

        $this->activationCode = $this->hashEmail();

        $data = array(
				"email" 			=> $this->email,
				"password" 			=> $this->pass,
				"first_name" 		=> $this->email,
				"active" 			=> 0,
				"signupDate" 		=> $dateTimeNow,
				"ip" 				=> "1.1.1.1",
				"activationCode" 	=> $this->activationCode,
				"admin"				=> 0,
			);
        
		$db->insert("users", $data );
	}

	/**
	* Converts $email in md5 hash
	*
	* @return string
	*/
	public function hashEmail() {

		return md5($this->email);
	}

	
	// public function checkActivationCode() {

	// 	$app = $this->app;

	// 	$data = array(
	// 		'active' => 1,
	// 		'activationCode' => $this->activationCode,
	// 		);

	// 	$app->db['default']->where("activationCode",$this->activetionCode);
	// 	$app->db['default']->update("users", $data);

	// }
}

