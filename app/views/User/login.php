<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Платформа Отзывов</title>
    <!-- Подключение Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
 
<!-- Контент страницы -->
<div class="container mt-5">
    <h2>Вход</h2>
    <form method="POST" action="/user/login">
        <div class="form-group">
            <label for="usernameInput">Имя пользователя или Email</label>
            <input type="text" class="form-control" name="name" id="usernameInput" placeholder="Введите имя пользователя или email">
        </div>
        <div class="form-group">
            <label for="passwordInput">Пароль</label>
            <input type="password" class="form-control" name = "password" id="passwordInput" placeholder="Пароль">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>


