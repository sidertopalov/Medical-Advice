<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class LoginController extends Controller
{
     /**
     * @Route('/login')
     * @Name('login.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        if (isset($_SESSION['isLogged']) === false) {
        
            $javascript = array(

                '/KinguinInternship/myProject/js/login.js',
                
                );

            $data = array(

                "title"         => "LoginController",
                "javascript"    => $javascript,

                );
            
            $app->render('pages/login.tpl', $data);
        } else {

            $app->redirect('/KinguinInternship/myProject/');
        }
    }

    public function testAction() {

        echo "test";
    }
}
