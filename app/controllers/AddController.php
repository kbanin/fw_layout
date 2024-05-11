<?


namespace app\controllers;

use app\models\Add;
use app\models\Main;
use fw\core\base\View;


class AddController extends AppController
{


    public function addReviewAction()

    {           
//Валидация данных, введённых пользователем для добавления отзыва в форму!
        if (!empty($_POST)) {
        $add = new Add(); 
        $data = $_POST;
        $add->load($data);
        if (!$add->validate($data)){
            
        //   $add->getErrors();
        $_SESSION['error'] = 'Ошибка! Все поля должны быть заполнены!';
        $_SESSION['form_data'] = $data;
        
        redirect();

        }else{

            
            
            $add->addReview('reviews');
            $_SESSION['success'] = 'Ваш отзыв успешно добавлен!';
            
           redirect('/personal-area');

        }
        View::setMeta('Добавление отзыва');



            

        
    
    
}
}
}