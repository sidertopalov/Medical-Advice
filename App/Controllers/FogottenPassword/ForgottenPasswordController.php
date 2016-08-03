<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\ForgottenPassword\ForgottenPasswordModel;


class ForgottenPasswordController extends Controller {


	 /**
     * @Route('/enter-email')
     * @Name('enter-email.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
 
            $javascript = array(

                '/js/sendEmail.js',
                
                );

            $data = array(
                'title' => 'Enter email',
               
                'javascript' => $javascript,
                );

            $app->render('/pages/enterEmail.tpl', $data);
        
    }
}