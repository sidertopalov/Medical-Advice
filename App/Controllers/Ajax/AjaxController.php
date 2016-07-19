<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Ajax\AjaxModel;

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

        if (!$ajax->validate()) {

            // if ($ajax->isUserActive) {
            //     # code...
            // }
            $error = "Fail to join! Check your email/password.";
        } 


        if(isset($error)) {

            $data = array(
                "title"         => "AjaxControllerFail",
                'errorMessage'  => $error,
                'error'         => false,
                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page

                );
            // $app->response()-headers()->set('Content-type', 'application/json');
            echo json_encode( $data );

        } else {

           $data = array(
                "title"         => "AjaxControllerSucc",
                'succ'          => "Hello, $loginEmail",
                'success'       => true,
                'error'         => true,
                'homePageUrl'   => $baseUrl['baseHomePageUrl'], // $baseUrl['baseHomePageUrl'] => '/KinguinInternship/myProject/' home page

                );
            // $app->response()-headers()->set('Content-type', 'application/json');
            echo json_encode( $data );
        }
    }
}