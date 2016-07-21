<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Ajax\AjaxModel;
use App\Models\MyAccount\MyAccountModel;

class AjaxController extends Controller
{
     /**
     * @Route('/ajax')
     * @Name('ajax.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $data = array(
            
            );
        // $app->render('pages/login.tpl', $data);
    }

    /**
     * @Route('/ajax/login')
     * @Name('post.index')
     * @Method('post') 
     */
    public function loginAction() {

        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $baseUrl = \Yee\Yee::getDefaultSettings();

        $loginEmail   = $app->request->post('loginEmail');
        $loginPass    = $app->request->post('loginPass');


        // Create instance of App\Models\Ajax\AjaxModel;
        $ajax = new AjaxModel($loginEmail, $loginPass);

        
        if (!$ajax->validateLogin()) {

            $error = "Fail to join! Check your email/password.";
        }


        if(isset($error)) {

            $data = array(
                "title"         => "AjaxControllerFail",
                'redirectTo'    => "/KinguinInternship/myProject/account",
                'message'       => $error,
                'error'         => false,
                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page

                );


        } else {

            $_SESSION['isLogged'] = true;
            $_SESSION['userEmail'] = $loginEmail;

            $data = array(
                "title"         => "AjaxControllerSucc",
                'redirectTo'    => "/KinguinInternship/myProject/account",
                'message'       => "Hello, $loginEmail",
                'success'       => true,
                'error'         => true,
                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page

                );
        }

        echo json_encode( $data );
    }

    /**
     * @Route('/ajax/updateMyAccount')
     * @Name('post.index')
     * @Method('post') 
     */
    public function postUpdateMyAccount() {

        $app = $this->getYee();


        // POST Variables
        $firstName = $app->request()->post('firstName');
        $lastName = $app->request()->post('lastName');
        $pass = $app->request()->post('pass');
        $passConf = $app->request()->post('passConf');


        $model = new MyAccountModel($firstName,$lastName,$pass,$passConf);
        $userProperty = $model->getAccountDetails();

        if ( ( $userProperty['first_name'] === $firstName && $userProperty['last_name'] === $lastName ) && ( empty($pass) > 0 ) ) {
            
            $error = "There is no new date for update.";   
        }


        if ( strlen(trim($pass)) > 0 ) {
            
            if ( !$model->validatePassword() ) {
            
                $error = "Password do not match.";

            } else {

                $model->updateAccount();
            }
        } else {

            if (!$model->updateAccount()) {

                $error = "Update account fail. Try again!";
            }
        }



        if(isset($error)) {

            $data = array(
                'message'       => $error,
                'error'         => false,
                );


        } else {

            $data = array(
                'message'       => "Succesfully updated!",
                'success'       => true,
                'error'         => true,
                );
        }
        
        echo json_encode( $data );
    }
}