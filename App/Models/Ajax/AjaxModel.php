<?php
namespace App\Models\Ajax;

class AjaxModel {


	private $loginEmail;
	private $loginPass;
	private $app;




	public function __construct($email,$pass) {

		$this->app 		 	= \Yee\Yee::getInstance();
		$this->loginEmail 	= $email;
		$this->loginPass 	= $pass;
	}




	public function userProperty() {

		$app = $this->app;
		return $app->db['default']->where("email",$this->loginEmail)->getOne('users');
	}




	public function isEmailExist() {

		$app = $this->app;

		$isUserExist = $this->userProperty();
		if ($isUserExist != NULL) {
			return true;
		}
		return false;
	}




	public function checkPassword() {

		$app = $this->app;

		if ($this->isEmailExist()) {

			$user = $this->userProperty();

			if ($this->loginPass == $user['password']) {
				return true;
			}
		}
		return false;
	}




	public function isUserActive() {

		$app = $this->app;

		$checkUserActive = $this->userProperty();

		if ($checkUserActive['active'] == 1) {
			return true;
		}
		return false;
	}




	public function validate() {

		if ($this->isEmailExist() && $this->checkPassword()) {
			return true;
		}
		return false;
	}




}