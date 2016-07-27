<?php 

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Article\ArticleModel;

class ArticleController extends Controller {

    /**
     * @Route('/article')
     * @Name('article.index')
     */
    public function indexAction() {

        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged']) === true) {

            $javascript = array(
                '/KinguinInternship/myProject/js/addArticle.js',
                );

            $data = array(
                'title'         => 'Add Article',
                'javascript'    => $javascript,
                );

            $app->render('pages/articleAdd.tpl', $data);
     
        } else {

            $app->redirect('http://localhost/KinguinInternship/myProject/login');
        }
    }



    /**
     * @Route('/articleList')
     * @Name('article.index')
     */
    public function listArticles() {

        /** @var Yee\Yee $yee */
        $app = $this->getYee();


        $article = new ArticleModel();

        // order by date ASC
        $commentsList = $article->getComments();

        // order by date DESC
        $commList = array_reverse($commentsList);

        $data = array(
                'title' => 'List of Articles',
                'commentDetails' => $commList,
                );

        $app->render('pages/articleList.tpl',$data);
    }
}