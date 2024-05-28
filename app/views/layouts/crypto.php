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
<script>function loadNews() {
   var selectedCrypto = $("#searchInput").val();
   var searchUrl = "main/search?"+encodeURIComponent(selectedCrypto);
   window.location.href = searchUrl;
//    $.ajax({
//        url: searchUrl,
//        method: "GET",
//        success: function(response) {
//            // Обработка успешного ответа от сервера
//            console.log(response);
//            // Действия с полученными данными
//        },
//        error: function(xhr, status, error) {
//            // Обработка ошибки AJAX-запроса
//        }
//    });
}</script>

</body> 
</html>