<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;


class MyAccountController extends Controller {

	 /**
     * @Route('/account')
     * @Name('account.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_GET['logout'])) {
            session_destroy();
            $app->redirect('http://localhost/KinguinInternship/myProject/');
        }

        if (isset($_SESSION['isLogged']) === true) {
           

            $data = array(
                'title' => 'My Account Settings',
                );

            $app->render('pages/myAccount.tpl', $data);

        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/');
        }

    }
}