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
    <div id="pagination" class="pagination">
        <!-- Пример кнопок пагинации -->
          
                <?for($i=1;$i<=$page_cnt;$i++):?>
                 <a href="?page=<?php echo $i; ?>" class="btn btn-sm btn-link"><?php echo $i; ?></a>
       
        <!-- <button onclick="loadNews(1)" class="btn btn-sm btn-link">1</button>
        <button onclick="loadNews(2)" class="btn btn-sm btn-link">2</button>
        <button onclick="loadNews(3)" class="btn btn-sm btn-link">3</button> -->
        <?endfor?>
    </div>
</div>
<!-- Скрипт для AJAX запросов -->

