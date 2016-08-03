<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Activation\ActivationModel;


class ActivationController extends Controller {

	   /**
     * @Route('/activation/:accode')
     * @Name('activation.index')
     */
    public function activationAction( $accode )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

      	$acmodel = new ActivationModel( $accode );

      	$userExists = $acmodel->checkIfAcCodeExists();

      	if( $userExists )
      	{
          $acmodel->activateUser($userExists);

          $redirect = '/login';

      	} else {
          
          $redirect = '/signup';

        }

        $app->redirect($redirect, 301);
    }

}