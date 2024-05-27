<h1 class="mb-4">Поиск новостей по криптовалютам</h1>
    <div class="search-area mb-4">

         <select id="searchInput" class="form-control">
        <option value="">Выберите криптовалюту</option>
        <?php foreach ($coins as $coin): ?>
            <option value="<?php echo trim($coin,"'") ; ?>"><?php echo trim($coin,"'"); ?></option>
        <?php endforeach; ?>
    </select>
        <button onclick="loadNews()" class="btn btn-primary mt-2">Поиск</button>
    </div>
<div id="newsResults" class="results">
    <!-- Здесь будет примерный вид новости после загрузки через AJAX -->
    <div class="text-center">
        <h2><strong>Новости о биткоин, блокчейне и криптовалютах</strong></h2>
    </div>
    <? foreach ($news as $item) : ?>
        <div class="news-item mb-3 p-2 border rounded">
            <h4 class="news-title"><?= $item->title ?></h4>
            <p class="news-description"><?= $item->dates?></p>
            <p class="news-description"><?= $item->description?></p>
            <a href="<?=$item->links?>" class="news-link">Читать полностью</a>
        </div>
    <? endforeach ?>
</div>