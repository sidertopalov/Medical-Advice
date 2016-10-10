<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
// use App\Libraries\Mailer\Mailer;


class TestController extends Controller {

	 /**
     * @Route('/test')
     * @Name('test.index')
     */
    public function testAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        // $data = array(
        //     'title' => "Test Controller",
        //     );
        

        $app->render('/pages/test.tpl',$data);
    }
}