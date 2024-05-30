

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

function onClickButton (){

  alert ("Вы нажали на меня");

}