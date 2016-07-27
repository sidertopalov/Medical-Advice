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

            $javascript = array(

                '/KinguinInternship/myProject/js/updateAccount.js',
                
                );

            $data = array(
                'title' => 'My Account Controller',
                'userDetail' => $accDetail,
                'javascript' => $javascript,
                );

            $app->render('pages/myAccount.tpl', $data);

        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/login');
        }
    }


    /**
     * @Route('/changePass')
     * @Name('account.index')
     */
    public function changePassAction() {

        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged']) === true) {
            
            $myAccount = new MyAccountModel();
            $accDetail = $myAccount->getAccountDetails();

            $javascript = array(

                '/KinguinInternship/myProject/js/changePass.js',
                
                );

            $data = array(
                'title' => 'Change Password',
                'userDetail' => $accDetail,
                'javascript' => $javascript,
                );

            $app->render('pages/changePass.tpl', $data);

        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/login');
        }
    }
}