<?

namespace app\models;

use app\controllers\MainController;
use fw\core\base\Model;


class Main extends Model
{


    // public $table = 'products';



    
    public function getData($table, $foreignKey)
    {
        $productData = [];
    
        foreach ($table as $item) {
            $countReview = 0;
            $totalRating = 0;
    
            $rightId = $item->id;
    
            $reviews = \R::findAll('reviews', "$foreignKey = ?", [$rightId]);
    
            foreach ($reviews as $review) {
                $countReview++;
                $totalRating += $review->rating_options;
            }
    
            $avgRating = $countReview > 0 ? round($totalRating / $countReview, 1) : 0;
    
            $productData[] = [
                'countReview' => $countReview,
                'avgRatings' => $avgRating,
            ];
        }
    
       return $productData ;
    }
}
