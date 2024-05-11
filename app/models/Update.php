<?

namespace app\models;

use fw\core\base\Model;

class Update extends Model
{

    public $attributes = [

        'text' => '',
        'ratingOptions' => '',



    ];


    public $rules = [

        'required' => [

            ['text'],
            ['ratingOptions']

        ]

    ];




    public function changeReview($table, $id)
    {



        $review = \R::findOne($table, 'id= ?', [$id]);
        (isset($this->attributes['text'])) ? $review->text = $this->attributes['text'] : '';
        (isset($this->attributes['ratingOptions'])) ? $review->ratingOptions = $this->attributes['ratingOptions'] : '';

        return \R::store($review);
    }
}
