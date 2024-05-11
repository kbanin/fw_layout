<?


namespace app\models;

use fw\core\base\Model;

class Product extends Model
{

    public function getProduct()
    {


        if (isset($_GET['p_id']) && is_numeric($_GET['p_id']) && $_GET['p_id'] <= 25) {
            // Получаем идентификатор продукта
            $id = $_GET['p_id'];
            // Выполняем запрос в таблицу 'products' для получения данных о товаре с идентификатором $product_id
            $data = \R::findOne('products', 'id = ?', [$id]);

            // ...
        } elseif (isset($_GET['s_id']) && is_numeric($_GET['s_id']) && $_GET['s_id'] <= 25) {
            // Получаем идентификатор услуги
            $id = $_GET['s_id'];
            // Выполняем запрос в таблицу 'services' для получения данных о услуге с идентификатором $product_id
            $data = \R::findOne('services', 'id = ?', [$id]);
            // ...
        } else {
            return null;
        }

        return $data;
    }

    public function getReviews ($table){

      
        if(isset($_GET['p_id'])) {
            $product_id = $_GET['p_id'];
            $reviews = \R::findAll($table, 'product_id = ?', [$product_id]);
            
            // Далее можно обработать полученные отзывы
        }
        if(isset($_GET['s_id'])) {
            $service_id = $_GET['s_id'];
            $reviews = \R::findAll($table, 'service_id = ?', [$service_id]);
            // Далее можно обработать полученные отзывы
        }
        // Дополнительная логика обработки отзывов

        return $reviews;


    }



   
    
        
}


