<h1 class="mb-4">Поиск новостей по криптовалютам</h1>
    <div class="search-area mb-4">

         <select id="searchInput" class="form-control">
        <option value="">Выберите криптовалюту</option>
        <?php foreach ($coins as $coin): ?>
            <option value="<?php echo $coin; ?>"><?php echo $сoin; ?></option>
        <?php endforeach; ?>
    </select>
        <button onclick="loadNews()" class="btn btn-primary mt-2">Поиск</button>
    </div>