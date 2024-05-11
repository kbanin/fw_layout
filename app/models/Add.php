<?

namespace app\models;

use fw\core\base\Model;

class Add extends Model
{

    public $attributes = [

        'name' => '',
        'text' => '',
        'ratingOptions' => '',



    ];


    public $rules = [

        'required' => [
            ['name'],
            ['text'],
            ['ratingOptions']

        ]

    ];




    public function addReview($table)
    {
        $tbl = \R::dispense($table);

        foreach ($this->attributes as $name => $value) {

            if ($name != 'name') $tbl->$name = $value;
        }
        if (isset($_SESSION['user']['name'])) $userName = $_SESSION['user']['name'];
        $productName = $this->attributes['name'];
        $user = \R::findOne('users', 'name = ? LIMIT 1', [$userName]);
        // Проверяем наличие значения переменной $name в таблице
        $myTable = ($product = \R::findOne('products', 'name = ? LIMIT 1', [$productName])) ? 'products' : 'services';
        $correctTable = \R::findOne($myTable, 'name = ? LIMIT 1', [$productName]);
        $linkId = ($myTable == 'products') ? 'product_id' : 'service_id';
        // Устанавливаем внешние ключи
        $tbl->user_id = $user->id;
        $tbl->$linkId = $correctTable->id;

        return \R::store($tbl);
    }
}
