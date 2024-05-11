<div class="container mt-5">
    <?php if (isset($head)) {
        echo $head;
    }

    ?>



    <!-- <h2>Продукты и Услуги</h2> -->

    <!-- <button class = "btn btn-default" id="send">Ajax</button> -->




    <!-- Блок для динамической загрузки продуктов через AJAX -->
    <div id="products-container">
        <!-- Пример результата поиска (Динамически загружаемый контент) -->
        <div class="list-group">
            <!-- Каждый результат как элемент списка -->
            <? if (!empty($products)) : ?>
                <? foreach ($products as $k => $product) :
                    $key = ($k - 1) % 5; ?>


                    <a href="/product?p_id=<?= $product['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= $product['name'] ?></h5>

                            <small class="text-muted">Средний рейтинг:<?= $productData[$key]['avgRatings'] ?>:из 5</small>
                        </div>
                        <p class="mb-1"><?= $product['description'] ?></p>
                        <small class="text-muted">Количество отзывов:<?= $productData[$key]['countReview'] ?></small>
                    <? endforeach ?>
                <? endif ?>

                <? if (!empty($services)) : ?>
                    <? foreach ($services as $k => $service) : 
                        $key = ($k - 1) % 5;?>
                        <a href="/product?s_id=<?= $service['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?= $service['name'] ?></h5>
                                <small class="text-muted">Средний рейтинг:<?= $serviceData[$key]['avgRatings'] ?>:из 5</small>
                            </div>
                            <p class="mb-1"><?= $service['description'] ?></p>
                            <small class="text-muted">Количество отзывов:<?= $serviceData[$key]['countReview'] ?></small>
                        <? endforeach ?>
                    <? endif ?>
                        </a>
                        <!-- Повторять выше для каждого результата -->
        </div>

        <!-- Постраничная навигация -->

        <nav aria-label="Page navigation example">
            <h2 class="text-center">Постраничная навигация</h2>
            <ul class="pagination justify-content-center">

                <li class="page-item disabled">

                </li>
                <div class="text-center">
                    <? if ($pagination->countPages > 1) : ?>
                        <?= $pagination ?>
                    <? endif ?>
                </div>

                </li>
            </ul>
        </nav>

    </div>
    <!-- Скрипт для AJAX запросов -->
    <script src="/js/script.js"></script>