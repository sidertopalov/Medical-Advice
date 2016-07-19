<?php namespace App\Models\Activation;


class activationModel {
	
	private $accode;




	public function __construct( $accode )
	{
		$this->accode = $accode;
	}




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