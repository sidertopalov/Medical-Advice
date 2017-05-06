<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\CategoryUser\CategoryUserModel;

// Category Controller for Users...

class CategoryUsersController extends Controller {  
     /**
     * @Route('/categorySelect')
     * @Name('categorySelect.index')
     */
    public function indexAction( )
    {
      
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $categoryUserModel = new CategoryUserModel();
        $categoryProperty = $categoryUserModel->getCategory();

        $data = array(
            'title' => 'List of Category',
            'categoryDetails' => $categoryProperty,
        );

        $app->render('/pages/categorySelect.tpl',$data);


    }
     /**
     * @Route('/category/view/:name') 
     * @Name('updateCategory.index')
     */
    public function updateCategory($name) {

        $app = $this->getYee();
        
        $categoryName = $name;

        $categoryUserModel = new CategoryUserModel();

        // take id from category name
        $categoryId = $categoryUserModel->getCategoryIdByName($categoryName);

        if (is_null($categoryId)) {
            $app->redirect('/categorySelect');
        }

        // take all articles by category id
        $articleListByCategoryId = array_reverse($categoryUserModel->getArticlesByCategoryId($categoryId));

        $data = array(
            'title' => $categoryName,
            'articleDetails' => $articleListByCategoryId,
        );
        
        $app->render('/pages/categoryUserList.tpl',$data);
    }


    /**
    * @Route('/read/question/:name')
    * @Name('readArticle.index')
    */
    public function readArticleAction($name){

        $app = $this->getYee();
        
        $categoryName = $name;

        $categoryUserModel = new CategoryUserModel();

        // take article by name
        $articleDetails = $categoryUserModel->getArticleDetailsByName($categoryName);

        // if article doesn't exist redirect to categorySelect.
        if (is_null($articleDetails)) {
            $app->redirect('/categorySelect');
        }
        
        $data = array(
            'title' => $categoryName,
            'articleDetails' => $articleDetails,
        ); 

        $app->render('/pages/articleRead.tpl',$data);
    } 

}