<?

namespace app\controllers;

use app\models\Main;
use fw\core\base\View;
use app\controllers\AppController;
use app\models\PersonalArea;
use app\models\Update;

class UpdateReviewController extends AppController
{





    public function indexAction()
    {
        $nameProduct = new PersonalArea();


        $reviewId = $_GET['reviewId'];
        if (!empty($reviewId)) {
            $_SESSION['reviewId'] = $reviewId;
            $review = \R::findOne('reviews', 'id= ?', [$reviewId]);
            $product =  $nameProduct->getProduct($review);

            $service =  $nameProduct->getService($review);

            $review->product = $product;
            $review->service = $service;
        }


        $this->set(compact('review'));


        View::setMeta('Редактирование отзывов', 'Описание страницы', 'Ключевые слова');
    }

    public function updateAction()
    {
        $reviewId = $_SESSION['reviewId'];

        //Валидация данных, введённых пользователем для редактирования отзыва!
        if (!empty($_POST)) {
            $add = new Update();

            $data = $_POST;
            $add->load($data);
            if (!$add->validate($data)) {

                //   $add->getErrors();
                $_SESSION['error'] = 'Ошибка! Все поля должны быть заполнены!';
                $_SESSION['form_data'] = $data;

                redirect();
            } else {



                $add->changeReview('reviews', $reviewId);
                $_SESSION['success'] = 'Ваш отзыв успешно изменён!';

                redirect('/personal-area');
            }
            
        }
    }
}
