

// document.write("JS говорит привет")
// console.info("JS говорит привет");
// console.log("JS говорит привет");
// console.error("JS говорит привет");
// console.warn("JS говорит привет");

// const num =5;
// // num = 7;
// console.log("Переменная:" + num);

// var number;

// number = true;

// console.log("Переменная:" + number);

// var num_1 = 5;
// var num_2 = 15;

// var res = num_2 - num_1;

// var str_1 = Number ("12");
// var str_2 = Number ("2");
// console.log ("Результат:"+(str_1 + str_2));

// console.log("Math:"+ Math.PI);
// console.log("Math:"+ Math.min(4,6,8,9,1,-9))


// var number = 15;
// var isHasHouse = true;

// if (number==5 || !isHasHouse){


//     console.log ("OK");

// }
// else if(number<10){
//     console.log ("Ok!");
// }
// else if (number==7){
//     console.log ("7!");
// }
// else if (number>15){
//     console.log (">15");
// }
// else{

//     console.log ("Else");
// }

// var stroka = "wor";
// switch (stroka){
//     case "4":
//   console.log ("Переменная со значением 4");
//   break;
//   case "45":
//     console.log ("Переменная со значением 45");
//     break;
//     case "word":
// console.log ("Переменная со значением 'word'");
// break;
// default:
//     console.log ("Default");
// }




// var arr = [5,true,"stroka",5.7,0,-100];
// arr[3] = "word";
// console.log(arr.length);

// var matrix = [
//     [4,6,8],["stroka",5.7],[0,-100]
// ];

// matrix[1][0]= 90;

// console.log(matrix);

// for (var i = 100; i>5;i/=2)
//     console.log(i);

// var j = 1000;
// while(j>=100){

//     console.log (j);
//     j-=100;


// }

// var isHasCar = true;

// while (isHasCar){


// var x = 0  ;

// do {
// console.log (x);
//  x++;
// } while(x<10){
   
// }



// for (var i = 10;i<=20;i+=2){
//   if(i>15) break;
// console.log (i);


// }

// for (var i = 10;i<=20;i++){
//     if(i%2==0)continue;
//   console.log (i);
  
  
//   }


// var arr = [5,7,8,9,10,91];
// for (var i=0;i<arr.length;i++) {

//     arr[i]*=2;

//     console.log ("Элемент"+(i+1)+":" + arr[i]);}

// 

//  var data = confirm("Вы сейчас дома ?");

//  if (data) alert ('Вы молодец');

// var data = prompt("Скажите сколько вам лет ",20);

// console.log (data);


// var person = null;
// if(confirm("Вы точно уверены")){
     
//     person = prompt("введите ваше имя");
//     alert ("Привет :"+ person);

// }else{
//  alert ("Вы наажли на 'Отмена'");

// }

// function info (word){

// console.log (word + "!");


// }

// function summa (a,b){

//     var res = a+b;
//     info(res);
// }
// summa(5,7);



// function summa (arr){
//      var sum = 0;
//      for (var i=0; i<arr.length;i++)
//         sum+=arr[i];
     
     
//      return sum;

// }
// var array = [6,8,1];

// var res = summa (array);
// res*=2;
// console.log ("Результат :"+ res);



//  var num = 10;


// function info (){
//     var num = 20;
//     console.log (num);
// }

// info();
// console.log(num);
// var counter = 0;
// function onClickButton (el){
    
//   counter++;
//   el.innerHTML = "Вы нажали на кнопку :"+ counter;
//   el.style.background = "red";
//   el.style.color = "blue";

//   el.style.cssText = "border-radius: 100px ;border:5; font-size:30px"
//   console.log(el.onclick);

// }

// function onInput (el){
//  if (el.value == "Hello")
//   alert ("И тебе привет");

//   console.log(el.value);


// }

// var text = document.getElementById("text")
// text.title = "New Text";
// console.log (text.title);

// text.style.color = 'red';
// text.style.backgroundColor = 'blue';

// text.innerHTML = "New<br>string";

// document.getElementById("text").style.color = "white";  


// var spans = document.getElementsByTagName('span');

// var spans = document.getElementsByClassName('simple-text');

// for (var i=0;i<spans.length;i++){

// console.log(spans[i].innerHTML);

// }


// document.getElementById('main-form').addEventListener("submit",checkForm)





// function checkForm (event){
// console.log(event);
// event.preventDefault();

// var el = document.getElementById('main-form');

// var name = el.name.value;
// var pass = el.pass.value;
// var repass = el.repass.value;
// var state = el.state.value;

// var fail = "";

// if (name ==""|| pass =="" || state == "" )
//    fail = "Заполните все поля" ;
//    else if(name.length<=1 || name.length>50 )
//    fail = "Введите корректное имя";
//    else if(pass != repass)
//    fail = "Пароли должны совпадать";
//    else if (pass.split("&").length>1)
//    fail = "Некорректный пароль";

//    if(fail != "")
//     {   document.getElementById('error').innerHTML = fail;

    
//     }else{
//       alert("Все данные корректно заполнены");
//      window.location = 'https://habr.com/ru/news/818177/';
//     }
   
// }






// var id = setInterval(my_func,1000);
// var counter = 0;

// function my_func (){
//  counter++;

//  console.log ("Counter"+counter);
   
//  if (counter ==3)
//     clearInterval(id);


// setInterval(function(){
//     counter++;
//     console.log ("Прошло секунд :" + counter);
// },1000);


// setTimeout(function(){
// console.log("Timer is working");
// },2000);


// var date = new Date ();

// console.log (date.getFullYear());
// console.log (date.getMonth()+1);
// console.log (date.getDate());
// console.log (date.getMinutes());
// date.setHours(23);
// date.setMinutes(23);
// console.log("Время :"+ date.getHours()+":"+date.getMinutes());


// console.log (arr.join(" & "));

// var arr  = [60,50,4,0,5,6,7,8];

// var stroka = arr.reverse().join(", ");


// console.log (stroka.split(", "));


// class Person {
//    constructor(name,age,happines)
//    {
//      this.name = name;
//      this.age = age;
//      this.happines = happines;}


//   info(){

//     console.log("Человек :"+ this.name + ". Возраст :"+ this.age);
//   }   

//    }

// var alex = new Person ("Jon",45,true);
// var bob = new Person ("Bob",25,false);


// alex.info();
// bob.info();


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
          
                <!-- <?for($i=1;$i<=$page_cnt;$i++):?>
                 <a href="?page=<?php echo $i; ?>" class="btn btn-sm btn-link"><?php echo $i; ?></a> -->
       
        <!-- <button onclick="loadNews(1)" class="btn btn-sm btn-link">1</button>
        <button onclick="loadNews(2)" class="btn btn-sm btn-link">2</button>
        <button onclick="loadNews(3)" class="btn btn-sm btn-link">3</button> -->
        <!-- <?endfor?> -->
    </div>
</div>
<!-- Скрипт для AJAX запросов -->

