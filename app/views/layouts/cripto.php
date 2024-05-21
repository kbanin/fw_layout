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
    <div id="pagination" class="pagination">
        <!-- Пример кнопок пагинации -->
        <button onclick="loadNews(1)" class="btn btn-sm btn-link">1</button>
        <button onclick="loadNews(2)" class="btn btn-sm btn-link">2</button>
        <button onclick="loadNews(3)" class="btn btn-sm btn-link">3</button>
    </div>
</div>



<!-- Подключение Bootstrap JS и Popper.js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body> 
</html>