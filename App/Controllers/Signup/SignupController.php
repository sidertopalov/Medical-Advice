<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Signup\SignupModel;
use App\Libraries\Mailer\Mailer;

class SignupController extends Controller
{
     /**
     * @Route('/signup')
     * @Name('signup.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        if (isset($_SESSION['isLogged']) === false) {
            $data = array(
                "title" => "Singup Controller",
            );
            $app->render('pages/signup.tpl', $data);
        } else {
            $app->redirect('/');
        }
    }

     /**
     * @Route('/signuptwo')
     * @Name('post.index')
     * @Method('post') 
     */
    public function signUpAction( )
    {
        
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        // \Yee\Yee::getDefaultSettings() return array(); 

        // --------------> POST variables <-------------
        $emailSignup    = $app->request->post('emailSignup');
        $passSignup     = $app->request->post('passSignup');
        $passConfSignup = $app->request->post('passConfSignup');

        // Create instance of App\Models\Signup\SignupModel;
        $signupModel = new SignupModel($emailSignup,$passSignup,$passConfSignup);

        if (!$signupModel->validate()) {
            
            $error = "Invalid Email/Password";
        } 
        else if (!$signupModel->checkUserDb()){
            $error = "Email is already exists";
        }

        if ( !isset($error) ) {

            // Registration new account
            $signupModel->register();

            // $dataMailer = array(
            //         'activationCode' => $signupModel->activationCode,
            // );
            // Create instance of App\Libraries\Mailer\Mailer
            // $mailer = new Mailer( "sidertopalov@gmail.com", $emailSignup, "signup", $dataMailer, "Activate Account" );

            // Send email 
            // $mailer->buildEmail()->sendEmail();
        }

        if(isset($error)) {

            $data = array(
                'title'         => "SignupController",
                'error'         => $error,
                );
            $app->render('/pages/signupErr.tpl', $data);

        } else {
           $data = array(
                'title'         => "SignupControllerSucc",
                'succ'          => 'Your registration is successful! Please check your email address for Activation Code link!',
                ); 
            $app->render('/pages/signupSucc.tpl', $data);
        }
    }
}



