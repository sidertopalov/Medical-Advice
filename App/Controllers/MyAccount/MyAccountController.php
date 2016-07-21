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


        $myAccount = new MyAccountModel();
        $accDetail = $myAccount->getAccountDetails();
        // var_dump($accDetail);
        // die();

        if (isset($_SESSION['isLogged']) === true) {
           

            $data = array(
                'title' => 'My Account Settings',
                'userDetail' => $accDetail,
                // 'userEmail' => $accDetail['email'],
                // 'userName' => $accDetail['username'],
                );

            $app->render('pages/myAccount.tpl', $data);

        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/');
        }
    }
}