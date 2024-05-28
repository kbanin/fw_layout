function loadNews() {
   var selectedCrypto = $("#searchInput").val();
   var searchUrl = "main/search?crypto=" + encodeURIComponent(selectedCrypto);
   
   $.ajax({
       url: searchUrl,
       method: "GET",
       success: function(response) {
           // Обработка успешного ответа от сервера
           // Действия с полученными данными
       },
       error: function(xhr, status, error) {
           // Обработка ошибки AJAX-запроса
       }
   });
}