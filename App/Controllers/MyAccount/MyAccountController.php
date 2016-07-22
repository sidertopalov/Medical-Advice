<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;


class MyAccountController extends Controller {

	 /**
     * @Route('/account')
     * @Name('account.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged']) === true) {

            $myAccount = new MyAccountModel();
            $accDetail = $myAccount->getAccountDetails();

            $data = array(
                'title' => 'My Account Controller',
                'userDetail' => $accDetail,
                );

            $app->render('pages/myAccount.tpl', $data);

        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/');
        }
    }

    /**
     * @Route('/editAccount')
     * @Name('account.index')
     */
    public function editAccountAction() {

        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged']) === true) {
            
            $myAccount = new MyAccountModel();
            $accDetail = $myAccount->getAccountDetails();
            // var_dump($accDetail);
            // die();
            $javascript = array(

                '/KinguinInternship/myProject/js/updateAccount.js',
                
                );

            $data = array(
                'title' => 'Edit Account',
                'userDetail' => $accDetail,
                'javascript' => $javascript,
                );

            $app->render('pages/editAccount.tpl', $data);

        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/');
        }
    }
}