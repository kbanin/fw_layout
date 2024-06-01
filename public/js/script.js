function loadNews(page) {
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