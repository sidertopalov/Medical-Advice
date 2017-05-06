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

          $redirect = 'http://localhost/KinguinInternship/myProject/login';

      	} else {
          
          $redirect = 'http://localhost/KinguinInternship/myProject/signup';

        }

        $app->redirect($redirect, 301);
    }

}