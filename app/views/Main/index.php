<div id="newsResults" class="results">
    <!-- Здесь будет примерный вид новости после загрузки через AJAX -->
    <div class="text-center">
        <h2><strong>Новости о биткоин, блокчейне и криптовалютах</strong></h2>
    </div>
    <? foreach ($titles as $index => $title) : ?>
        <div class="news-item mb-3 p-2 border rounded">
            <h4 class="news-title"><?= $title ?></h4>
            <p class="news-description"><?= $dates[$index] ?></p>
            <p class="news-description"><?= $descriptions[$index] ?></p>
            <a href="<?= $links[$index] ?>" class="news-link">Читать полностью</a>
        </div>
    <? endforeach ?>
</div>