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
          
               
        <button onclick="loadStr(1)" class="btn btn-sm btn-link">1</button>
        <button onclick="loadStr(2)" class="btn btn-sm btn-link">2</button>
        <button onclick="loadStr(3)" class="btn btn-sm btn-link">3</button>
        <button onclick="loadStr(4)" class="btn btn-sm btn-link">4</button>
        <button onclick="loadStr(5)" class="btn btn-sm btn-link">5</button>
        <button onclick="loadStr(6)" class="btn btn-sm btn-link">6</button>
        <button onclick="loadStr(7)" class="btn btn-sm btn-link">7</button>
        <button onclick="loadStr(8)" class="btn btn-sm btn-link">8</button>
        <button onclick="loadStr(9)" class="btn btn-sm btn-link">9</button>
        
     
    </div>
</div>
<!-- Скрипт для AJAX запросов -->
<script>
    function loadStr(page) {
    $.ajax({
      url: '/main/pagination',
      type: 'GET',
      data: { page: page },
      dataType: 'html',
      success: function(response) {

        console.log(response);
        // Обработка успешного ответа от сервера
        $('#newsResults').html(response);
      },
      error: function(xhr, status, error) {
        // Обработка ошибки
        console.error(error);
      }
    });
  }
</script>
<script>function loadNews() {
    var selectedCrypto = $("#searchInput").val();

    // Выполнить AJAX запрос для загрузки данных
    $.ajax({
        url: "/main/search",
        method: "GET",
        data: { crypto: selectedCrypto },
        success: function(response) {
            // Обновить содержимое элемента <div> с результатами новостей
            $("#newsResults").html(response);
        },
        error: function() {
            // Обработать ошибку
            // ...
        }
    });
}</script>
