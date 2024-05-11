<div class="container mt-5">
    <!-- <h2>Продукты и Услуги</h2> -->


    <!-- <button class = "btn btn-default" id="send">Ajax</button> -->
   


    <!-- Блок для динамической загрузки продуктов через AJAX -->
    <div id="products-container">
        <!-- Пример результата поиска (Динамически загружаемый контент) -->
        <div class="list-group">
            <!-- Каждый результат как элемент списка -->
            <a href="product.html" class="list-group-item list-group-item-action flex-column align-items-start">
                <? if (!empty($products)) : ?>
                    <? foreach ($products as $k => $product) :
                     $key = ($k-1);?>
                     
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= $product['name'] ?></h5>
                            <?if(isset($key)):?>
                            <small class="text-muted"><?=$productData[$key] ['avgRatings']?>:из 5</small>
                        </div>
                        <p class="mb-1"><?= $product['description'] ?></p>
                        <small class="text-muted">Количество отзывов:<?= $productData[$key] ['countReview']?></small>
                        <? endif; ?>
                    <? endforeach; ?>
                <? endif; ?>

                <a href="product.html" class="list-group-item list-group-item-action flex-column align-items-start">
                    <? if (!empty($services)) : ?>
                        <? foreach ($services as $service) : ?>
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?= $service['name'] ?></h5>
                                <small class="text-muted">0</small>
                            </div>
                            <p class="mb-1"><?= $service['description'] ?></p>
                            <small class="text-muted">Количество отзывов: 0</small>
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