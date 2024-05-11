<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование отзыва</title>
    <!-- Подключение Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Контент страницы -->
<div class="container mt-5">
    <h1>Редактировать отзыв</h1>
    <br>
    <br>
        <form method="post" action="/update-review/update">
        <div class="form-group" >
            <label for="productName" style="font-weight: bold; font-size: 20px;" ><?= isset($review->product) ?
             $review->product->name : (isset($review->service) ? $review->service->name : 'Нет данных') ?></label>
          
        </div>
        <div class="form-group">
            <label>Рейтинг</label>
            <div>
                <!-- Радио-кнопки для рейтинга -->
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating1" value="1" <?= ($review->ratingOptions == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="rating1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating2" value="2"<?= ($review->ratingOptions == 2) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="rating1">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating3" value="3"<?= ($review->ratingOptions == 3) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="rating1">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating4" value="4"<?= ($review->ratingOptions == 4) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="rating1">4</label>
                </div>
                <!-- Повторять для значения рейтинга от 1 до 5 -->
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="ratingOptions" id="rating5" value="5"<?= ($review->ratingOptions == 5) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="rating5">5</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="reviewText">Текст Отзыва</label>
            <textarea class="form-control" id="reviewText" name = "text" rows="3" placeholder="Введите ваш отзыв" ><?=$review->text?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
    </form>

</div>

