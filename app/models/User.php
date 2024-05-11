<?


namespace app\models;

use fw\core\base\Model;

class User extends Model
{

     public $attributes = [

          'name' => '',
          'email' => '',
          'password' => '',



     ];


     public $rules = [

          'required' => [
               ['name'],
               ['email'],
               ['password'],
               



          ],
          'email' => [
               ['email']
          ],
          'lengthMin' => [
               ['password', 6]
          ],


     ];

     public function checkUnique()
     {

          $user = \R::findOne('users', 'email = ? LIMIT 1', [$this->attributes['email']]);
          if ($user) {

               if ($user->email == $this->attributes['email']) {
                    $this->errors['unique'][] = 'Этот email уже занят';
               }
               return false;
          }
          return true;
     }


     public function login()
     {

          $name = !empty(trim($_POST['name'])) ? trim($_POST['name']) : null;
          $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
          if ($name && $password) {

               $user = \R::findOne('users', "name=? OR email=?  LIMIT 1 ", [$name, $name]);
               if ($user) {
                    if (password_verify($password, $user->password)) {
                         foreach ($user as $k => $v) {
                              if ($k != 'password')  $_SESSION['user'][$k] = $v;
                         }
                         return true;
                    }
               }
          }

          return false;
     }
}
