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

//         // $data = array(
//         //     );

//      	//  $mailer = new Mailer( "sidertopalov@gmail.com", "cansua.ali@gmail.com", "signup", $data, "Activate Account 2" );

//     	// $mailer->buildEmail()->sendEmail();	

//         // $hashEmail = md5("sidertopalov@gmail.com");
//         // $normalEmail = "sidertopalov@gmail.com";

//         // if ($hashEmail == md5($normalEmail)) {
//         //     echo "Yes";
//         // }
//         // echo "<br>";
//         // echo sha1("sidertopalov@gmail.com");

    }

}