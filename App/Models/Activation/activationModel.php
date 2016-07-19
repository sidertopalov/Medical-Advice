<?php namespace App\Models\Activation;



class activationModel {

	/**
	* Activation Code from database field
	*
	* @var string
	*/	
	private $accode;


	public function __construct( $accode )
	{
		$this->accode = $accode;
	}


	/**
	* This method check if activation code exist in database
	*
	* @return array if activation code exist. Or false
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
	* This method update 'activationCode' and 'active' field in database
	*
	* @param array => activateUser( $userData ) where $userData is array and have email address 
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