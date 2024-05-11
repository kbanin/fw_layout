<?

use app\models\PersonalArea; ?>
<!DOCTYPE html>
<html lang="ru">


<body>

    <!-- Контент страницы -->

    <div class="container mt-5">
        <? if (!empty($data)) : ?>
            <h2 style="text-decoration: underline;" id="product-name"><?= h($data['name']) ?></h2>
            <p id="product-description"><?= h($data['description']) ?></p>
            <? if (isset($reviews)) : ?>
                <? foreach ($reviews as $review) : ?>
                    <h4 style= "color: blue;"> Имя пользователя: <?= $review->user->name ?></h4>
                    <!-- <p class="user-name">Имя пользователя: <?= $review->user->name ?></p> -->
                    <!-- Блок для динамической загрузки отзывов через AJAX -->
                    <div id="reviews-container">
                        <!-- Пример отзыва (Динамически загружаемый контент) -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Отзыв</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= PersonalArea::getRatingStars($review->rating_options) ?></h6>
                                <p class="card-text"><?= $review->text ?></p>
                            </div>
                        </div>
                    <? endforeach ?>
                    </div>
                <? endif; ?>
            <? else : ?>
                <div style="color: red;"><strong>Выберите продукт/услугу из списка</strong></div>
    </div>
<? endif; ?>






<!-- Подключение Bootstrap JS и зависимостей -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Скрипт для AJAX запросов -->
<script src="script.js"></script>
</body>

</html>