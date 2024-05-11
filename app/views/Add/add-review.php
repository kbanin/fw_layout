<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить отзыв | Платформа Отзывов</title>
    <!-- Подключение Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Контент страницы -->
<div class="container mt-5">
    <h2>Добавить отзыв</h2>
    <form method="post" action="/add/add-review">
        <div class="form-group">
            <label for="productName">Название продукта</label>
            <input type="text" class="form-control" name = "name" id="productName" placeholder="Введите название продукта" value= 
                "<?=isset($_SESSION['form_data']['name'])? h($_SESSION['form_data']['name']): '';?>">
        </div>
        <div class="form-group">
            <label>Рейтинг</label>
            <div>
                <!-- Радио-кнопки для рейтинга -->
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating1" value="1">
                    <label class="form-check-label" for="rating1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating2" value="2">
                    <label class="form-check-label" for="rating1">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating3" value="3">
                    <label class="form-check-label" for="rating1">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating4" value="4">
                    <label class="form-check-label" for="rating1">4</label>
                </div>
                <!-- Повторять для значения рейтинга от 1 до 5 -->
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating5" value="5">
                    <label class="form-check-label" for="rating5">5</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="reviewText">Отзыв</label>
            <textarea class="form-control" id="reviewText" name = "text" rows="3" placeholder="Введите ваш отзыв">
            <?=isset($_SESSION['form_data']['text'])? h($_SESSION['form_data']['text']): '';?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
    <? if (isset($_SESSION['form_data'])) unset ($_SESSION['form_data'])?>
</div>

