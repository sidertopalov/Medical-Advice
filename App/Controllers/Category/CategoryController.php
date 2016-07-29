<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Category\CategoryModel;

// Category Controller for Admin...

class CategoryController extends Controller {  
     /**
     * @Route('/category')
     * @Name('category.index')
     */
    public function indexAction( )
    {
      
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $javascript = array(

            '/KinguinInternship/myProject/js/categoryAdd.js',
          );
        
        $data = array(

            'title' => 'New Category',
            'javascript' => $javascript,
          );

        if ($_SESSION['isAdmin']) {
          $app->render('/pages/categoryAdd.tpl',$data);

        } else {

          $app->redirect('/KinguinInternship/myProject/account'); 

        }

    }
     /**
     * @Route('/categoryUpdate/:id') 
     * @Name('updateCategory.index')
     */
     public function updateCategory($id) {

          $app = $this->getYee();
          
          $categoryId = $id;

          if ($_SESSION['isAdmin'] != 1) {
            $app->redirect('/KinguinInternship/myProject/account');
          }

          $categoryModel = new CategoryModel();
          $categoryProperty = $categoryModel->getCategoryById($categoryId);

          if ($categoryProperty == null) {
              
              $app->redirect('/KinguinInternship/myProject/categoryList');
          }


          $javascript = array(

            '/KinguinInternship/myProject/js/categoryUpdate.js',
            );


          $data = array(
            'title' => 'Update Category',
            'javascript' => $javascript,
            'categoryId' => $categoryId,
            'categoryName' => $categoryProperty['name'],
            ); 
          $app->render('/pages/categoryUpdate.tpl',$data);
     }

     /**
     * @Route('/categoryDelete/:id') 
     * @Name('updateCategory.index')
     */
     public function deleteCategory($id) {

          $app = $this->getYee();

          if ($_SESSION['isAdmin'] != 1) {
            $app->redirect('/KinguinInternship/myProject/account');
          }

          $categoryModel = new CategoryModel();
          $categoryProperty = $categoryModel->getCategoryById($id);

          if ($categoryProperty == null) {
              
              $app->redirect('/KinguinInternship/myProject/categoryList');
          }

          $javascript = array(

            '/KinguinInternship/myProject/js/categoryDelete.js',
            );

          $data = array(
            'title' => 'Delete Category',
            'javascript' => $javascript,
            'categoryId' => $categoryProperty['id'],      
            'categoryName' => $categoryProperty['name'],
            ); 
          $app->render('/pages/categoryDelete.tpl',$data);
     }

     /**
     * @Route('/categoryList') 
     * @Name('updateCategory.index')
     */
     public function listCategory() {

          $app = $this->getYee();

          $categoryModel = new CategoryModel();
          $categoryList = $categoryModel->getCategory();

          if ($_SESSION['isAdmin'] != 1) {
            $app->redirect('/KinguinInternship/myProject/account');
          }

          $data = array(
              'title' => 'List Category',
              'categoryDetails' => $categoryList,
            ); 

          $app->render('/pages/categoryList.tpl',$data);
     }
}