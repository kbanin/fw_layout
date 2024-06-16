
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости Криптовалют</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение jQuery для работы AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Поиск новостей по криптовалютам</h1>
    <div class="search-area mb-4">
        <input type="text" id="searchInput" class="form-control" placeholder="Введите название криптовалюты...">
        <button onclick="loadNews()" class="btn btn-primary mt-2">Поиск</button>
    </div>

    <div id="newsResults" class="results">
     
        <!-- Здесь будет примерный вид новости после загрузки через AJAX -->
      
    </div>
    <?=$content?>
   
</div>



<!-- Подключение Bootstrap JS и Popper.js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script>function loadNews(pageNumber) {
  // Получаем значение из поля ввода
  var searchQuery = document.getElementById("searchInput").value;

  // Отправляем AJAX-запрос на сервер
  $.ajax({
    url: "/main/search", // URL страницы контроллера
    type: "GET",
    data: { query: searchQuery,page:pageNumber }, // Передаем параметр запроса
    success: function (response) {
        $("#newsResults").html(response);
    },
    error: function (xhr, status, error) {
      // Обработка ошибки
      console.log(error);
    },
  });
}
</script>



</body>
</html>



