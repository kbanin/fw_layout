<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация | Платформа Отзывов</title>
    <!-- Подключение Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>



<!-- Контент страницы -->
<div class="container mt-5">
    <h2>Регистрация</h2>
    <form method="POST" action="/user/signup">
        <div class="form-group">
            <label for="usernameInput">Имя пользователя</label>
            <input type="text" class="form-control" name = "name" id="usernameInput" placeholder="Введите имя пользователя"value = 
                "<?=isset($_SESSION['form_data']['name'])? h($_SESSION['form_data']['name']): '';?>">
        </div>
        <div class="form-group">
            <label for="emailInput">Email адрес</label>
            <input type="email" class="form-control" name ="email" id="emailInput" placeholder="Введите email"value = 
                "<?=isset($_SESSION['form_data']['email'])? h($_SESSION['form_data']['email']): '';?>">
        </div>
        <div class="form-group">
            <label for="passwordInput">Пароль</label>
            <input type="password" class="form-control" name = "password" id="passwordInput" placeholder="Пароль"value = 
                "<?=isset($_SESSION['form_data']['password'])? h($_SESSION['form_data']['password']): '';?>">
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
    <? if (isset($_SESSION['form_data'])) unset ($_SESSION['form_data'])?>

</div>


