<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class HomeController extends Controller
{
     /**
     * @Route('/')
     * @Name('home.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $data = array(
            "title" => "Home",
            "test" => "Hello, world",
            "su" => "Hello from",
            "tty" => array(
                "sider" => "Yee PHP Framework!",
                "hey" => "How are you guys?",
                ),
            );
        
        $app->render('pages/index.tpl', $data);
    }
}