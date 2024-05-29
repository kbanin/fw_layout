 <!-- Здесь будет примерный вид новости после загрузки через AJAX -->
 <div class="text-center">
     <h2><strong>Новости <?= isset($coin) ? $coin : '' ?></strong></h2>
 </div>
 <?if ($coinNews =='' ):?>
    <p>Новости по криптовалюте отсутствуют!</p>
    <?else:?>
 <? foreach ($coinNews as $news) : ?>
     <div class="news-item mb-3 p-2 border rounded">
         <h4 class="news-title"><?= $news->title ?></h4>
         <p class="news-description"><?= $news->dates ?></p>
         <p class="news-description"><?= $news->description ?></p>
         <a href="<?= $news->links ?>" class="news-link">Читать полностью</a>
     </div>
 <? endforeach ?>
 <?endif?>