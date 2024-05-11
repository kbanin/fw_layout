<?

namespace app\controllers;

use app\models\Main;
use app\models\PersonalArea;
use app\models\User;
use fw\core\base\View;


class PersonalAreaController extends AppController
{

    public $layout = 'personal-area';



    public function indexAction()
    {


        $userReviews = new PersonalArea();
        $user_id = $_SESSION['user']['id'];
        $reviews = \R::findAll('reviews', 'user_id= ? ', [$user_id]);




        foreach ($reviews as $review) {
            $product = $userReviews->getProduct($review);

            $service = $userReviews->getService($review);

            $review->product = $product;
            $review->service = $service;
        }


        $this->set(compact('reviews'));

        //Удаление отзыва!
        // Проверяем, был ли отправлен запрос на удаление отзыва
        if (isset($_GET['deleteReviewId'])) {
            $deleteReviewId = $_GET['deleteReviewId'];

            $userReviews->deleteReview('reviews', $deleteReviewId);


            redirect();
        }
    }
}
