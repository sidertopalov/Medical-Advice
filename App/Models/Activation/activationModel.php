<?php 
namespace App\Models\Activation;



class activationModel {

	/**
	* Activation Code from the database field
	*
	* @var string
	*/	
	private $accode;


	public function __construct( $accode )
	{
		$this->accode = $accode;
	}


	/**
	* This method checks if activation code exists in the database
	*
	* @return array if activation code exists. Or boolean false
	*/
	public function checkIfAcCodeExists()
	{
		
		$app = \Yee\Yee::getInstance();


		$app->db['default']->where('activationCode', $this->accode );
		$app->db['default']->where('active', 0 );

		$return = $app->db['default']->getOne( 'users' );

		if( NULL == $return )
		{
			return false;
		}
		return $return;
	}

	/**
	* This method updates 'activationCode' and 'active' fields in the database
	*
	* @param array => activateUser( $userData ) where $userData is an array and has an email address.. 
	* 		 example: array with (key => 'email' and value = valid email)
	*
	* @return void
	*/
	public function activateUser( $userData )
	{
		$app = \Yee\Yee::getInstance();

		$data = array(
				'activationCode' =>'',
				'active' => 1	
			);	
		
		$app->db['default']->where('email', $userData['email'] );

		$app->db['default']->update( 'users', $data );
	}

}