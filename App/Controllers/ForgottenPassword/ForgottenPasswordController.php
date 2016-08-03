<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\ForgottenPassword\ForgotPassModel;

class ForgottenPasswordController extends Controller
{

     /**
     * @Route('/enter-email')
     * @Name('reset-password.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $javascript = array(

            'js/enterEmail.js',
        );

        $data = array(

            "title"         => "Enter Email Action",
            "javascript"    => $javascript,

            );
        
        $app->render('pages/enterEmail.tpl', $data);
    }


    /**
    * @Route('/secret-code/:secretCode')
    * @Name('secret-code.index')
    */    
    public function secretCodeAction($secretCode)
    {
        
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $model = new ForgotPassModel();

        $codeCheck = $model->checkSecretCode($secretCode);


        if( $codeCheck )
        {

            $redirect = '/reset-password';

        } else {
          
            $redirect = '/404';

        }

        $app->redirect($redirect, 301);
    }


    /**
    * @Route('/reset-password')
    * @Name('reset-password.index')
    */    
    public function resetPasswordAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $model = new ForgotPassModel();

        
        if ( isset($_SESSION['email']) == false )  {
            
            $app->redirect('pages/login');
        }


        $javascript = array(

            'js/resetPassword.js',
        );

        $data = array(

            "title"     => "Reset Passowrd Action",
            "javascript" => $javascript,

            );

        $app->render('pages/resetPassword.tpl',$data);
    }

}