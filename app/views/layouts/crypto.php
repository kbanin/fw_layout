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

    
    <?=$content?>
    

    
</div>



<!-- Подключение Bootstrap JS и Popper.js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
<!-- Скрипт для AJAX запросов -->
<script>
    function loadStr(page) {
    $.ajax({
      url: '/main/pagination',
      type: 'GET',
      data: { page: page },
      dataType: 'html',
      success: function(response) {

        
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



</body> 
</html>