<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Форма регистрации</title>
</head>
<body>
    <div class="container">
        <h1>Регистрации</h1>
        <form method="POST" action="/user/signup">
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин" value = 
                "<?=isset($_SESSION['form_data']['login'])? h($_SESSION['form_data']['login']): ''?>">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
            </div>
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя"value = 
                "<?=isset($_SESSION['form_data']['name'])? h($_SESSION['form_data']['name']): ''?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Введите email"value = 
                "<?=isset($_SESSION['form_data']['email'])? h($_SESSION['form_data']['email']): ''?>">
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>
        <? if (isset($_SESSION['form_data'])) unset ($_SESSION['form_data'])?>
    </div>

   
</body>
</html>