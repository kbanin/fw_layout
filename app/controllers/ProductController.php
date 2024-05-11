<?

namespace app\controllers;


use fw\core\base\View;
use app\models\Product;
use app\controllers\AppController;

class ProductController extends AppController
{





    public function indexAction()
    {

        $product= new Product();

        $data = $product->getProduct();


        $reviews = $product->getReviews('reviews');
       
        foreach ($reviews as $review){

           $userId = $review->user_id;
           $user= \R::load('users', $userId);
           $review->user=$user;
           
        
        }
        
          

        View::setMeta('Карточка товара', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('data','reviews'));





        
    }
    





}
