<?

namespace app\models;

use fw\core\base\Model;


class PersonalArea extends Model
{




    public function getProduct($table)
    {
        $product = null; // Инициализируем переменную $product
        if ($table->product_id !== null) $product = \R::load('products', $table->product_id);
        return $product;
    }

    public function getService($table)
    {
        $service = null; // Инициализируем переменную $service
        if ($table->service_id !== null) $service = \R::load('services', $table->service_id);
        return $service;
    }



    public static function getRatingStars($rating)
    {

        $stars = str_repeat('★', $rating) . str_repeat('☆', 5 - $rating);
        return $stars;
    }

    public function deleteReview($table, $id)
    {

        $review = \R::findOne($table, 'id= ?', [$id]);
        \R::trash($review);
    }
}
