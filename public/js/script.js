$(function(){
   $('.pagination a'). click (function(event){
   event.preventDefault(); // Предотвращаем перезагрузку страницы по умолчанию
   var pageNumber = $(this).attr('href').split('=')[1]; // Получаем номер страницы из атрибута data-page элемента, по которому был совершен клик
  
   
   $.ajax({
   
   url: 'main/test',
   type: 'get',
   data: { 'page': pageNumber }, // Передаем номер страницы в виде параметра GET
   success: function(res){
      // $('#result').html(res);
      $('#products-container').html(res);

      // console.log(res);
   },
   error: function (){
      alert ('Error!');
   }
   });
   });
   
   });