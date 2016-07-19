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

        // Method get() is like => "SELECT * FROM users".
        $dbResult = $app->db['default']->get('users');
        // $dbResultWhere = $app->db['default']->where();
        // var_dump($dbResult);

        $data = array(
            "title" => "Sing Up",
            "test" => "Hello, world",
            "su" => "Hello from",
            "tty" => array(
                "sider" => "Yee PHP Framework!",
                "hey" => "How are you guys?",
                ),
            );
        
        $app->render('pages/signup.tpl', $data);
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

        // \Yee\Yee::getDefaultSettings() return array();   ----> Ask question kude e nai pravilno da definirash const s putq
        //                                                  ----> za da moje da q izpolzvash ot vsqkade????

        // в случай че триеш този ред е добре да изтриеш и 'baseMyPath' в \Yee\Yee::getDefaultSettings() метода!
        $baseUrl = \Yee\Yee::getDefaultSettings();
        // $a = explode('htdocs', $app->root()); // use a[1] => "/KinguinInternship/myProject/";

        // var_dump($app->request->getRootUri());
        // var_dump($app->request->getUrl());
        // die();

        
        // --------------> POST variables <-------------

        // $postVar        = $app->request->post();
        $emailSignup    = $app->request->post('emailSignup');
        $passSignup     = $app->request->post('passSignup');
        $passConfSignup = $app->request->post('passConfSignup');

        // Create instance of App\Models\Signup\SignupModel;
        $signupModel = new SignupModel($emailSignup,$passSignup,$passConfSignup);

        if (!$signupModel->validate()) {
            
            // echo "invalid <br>";
            $error = "Invalid Email/Password";
        } 
        else if (!$signupModel->checkUserDb()){

            // echo "user exist <br>";
            $error = "Email is already exists";
        }

        if ( !isset($error) ) {
            // echo "Execute query <br>";
            $signupModel->register();

            $dataMailer = array(
                    'activationCode' => $signupModel->activationCode,
                    'homePageUrl' => $baseUrl['baseHomePageUrl'],
                );    


            $mailer = new Mailer( "sidertopalov@gmail.com", $emailSignup, "signup", $dataMailer, "Activate Account" );

            // send email 
            $mailer->buildEmail()->sendEmail();
           

        }

        // if($signupModel->validate()) {

        //     $signupModel->register();
        // } else {

        //     echo "Invalid Email/Password";
        // }


        // if($singupModel->isEmail()) {
        //     echo "<b>$emailSignup</b> is a valid email address <br>";
        // } else {
        //     echo "<b>$emailSignup</b> is not a valid email address";
        // }

        // var_dump($singupModel->validate());
        // echo "<br>";

        // if ($singupModel->checkPass()) {
            
        //     echo "<b>Password</b> is a valid <br>";
        // } else {
        //     echo "<b>Password</b> is not a valid <br>";
        // }

        // die('test');

        // var_dump($emailSignup);
        // die();

        if(isset($error)) {

            $data = array(

                'title'         => "SignupController",
                'error'         => $error,
                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page

                );
            
            $app->render('pages/signupErr.tpl', $data);

        } else {

           $data = array(
                'title'         => "SignupControllerSucc",
                'succ'          => 'Your registration is successful! Please check your email address for Activation Code link!',
                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page

                );
            
            $app->render('pages/signupSucc.tpl', $data);
        }
    }
}



