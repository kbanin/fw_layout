 <!-- Блок для динамической загрузки продуктов через AJAX -->
 <div id="products-container">
     <!-- Пример результата поиска (Динамически загружаемый контент) -->
     <div class="list-group">
         <!-- Каждый результат как элемент списка -->
         <? if (!empty($products)) : ?>
             <a href="/product?p_id=<?= $products['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                 <div class="d-flex w-100 justify-content-between">


                     <h5 class="mb-1"><?= $products['name'] ?></h5>
                     <small class="text-muted">Рейтинг: ★★★★☆</small>
                 </div>
                 <p class="mb-1"><?= $products['description'] ?></p>
                 <small class="text-muted">Количество отзывов: 25</small>
             <? endif ?>



             <? if (!empty($services)) : ?>
                 <a href="/product?s_id=<?= $services['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">

                     <div class="d-flex w-100 justify-content-between">

                         <h5 class="mb-1"><?= $services['name'] ?></h5>
                         <small class="text-muted">Рейтинг: ★★★★☆</small>
                     </div>
                     <p class="mb-1"><?= $services['description'] ?></p>
                     <small class="text-muted">Количество отзывов: 25</small>
                 <? endif ?>