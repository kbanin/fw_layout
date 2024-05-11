<div class="container mt-5">
<?

use app\models\PersonalArea;

 if (isset($_SESSION['success'])):?>
     <div class="alert alert-success">
     <?=$_SESSION['success'];unset($_SESSION['success']);?>
     </div>
  <? endif?>

    <h2>Мои отзывы</h2>
    <br>
    <h5 style="text-decoration: underline;"><?=$_SESSION['user']['name'];?></h5>
    <br>
    <div class="mb-4">
        <a href="/add/add-review" class="btn btn-success">Добавить новый отзыв</a>
    </div>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Продукт|Услуга</th>
            <th scope="col">Отзыв</th>
            <th scope="col">Рейтинг</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <?
        $count = 1; // Инициализируем переменную $count
        foreach ($reviews as $review): ?>
        <!-- Пример отзыва -->
        <tr>
        <th scope="row"><?= $count?></th>
            <td><?= isset($review->product) ? $review->product->name : (isset($review->service) ? $review->service->name : 'Нет данных') ?></td>
            <td><?= $review->text ?></td>
            <td><?= PersonalArea::getRatingStars($review->rating_options) ?></td>
            <td>
            
                <a href="update-review?reviewId=<?= $review->id ?>" class="text-primary"><i class="fas fa-edit"></i></a>
                <a href="?deleteReviewId=<?= $review->id ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        <!-- Добавить другие отзывы -->
        <?php
            $count++; // Увеличиваем значение переменной $count
            ?>
        <? endforeach; ?>
        </tbody>
    </table>
</div>



  






